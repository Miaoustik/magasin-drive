<?php

namespace App\Controller;

use App\Entity\User;
use App\Security\AppAuthenticator;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegisterController extends AbstractController
{
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request,
        EntityManagerInterface $manager,
        UserPasswordHasherInterface $hasher,
        Security $security
    ): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('app_homepage');
        }

        $user = new User();

        $form = $this->createFormBuilder($user)
            ->add('email', EmailType::class, [
                'label' => 'Email'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe'
            ])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var User $user */
            $user = $form->getData();

            $user->setPassword($hasher->hashPassword($user, $user->getPassword()));
            $user->setRoles(['ROLE_USER']);

            $manager->persist($user);

            try {
                $manager->flush();
            } catch (UniqueConstraintViolationException $e) {
                $form->addError(new FormError('Cet email éxiste déjà.'));
            }

            if (count($form->getErrors()) === 0) {
                return $security->login($user, AppAuthenticator::class);
            }
        }

        //TODO une fois les champ ajouter a la page s'inscrire et les données traités mettre isComplete a true sur l'user

        return $this->render('security/login.html.twig', [
            'search' => false,
            'loginText' => "S'inscrire",
            'loginSign' => false,
            'error' => null,
            'last_username' => null,
            'form' => $form
        ]);
    }

    #[Route('/remplir-profil', name: 'app_complete_profil')]
    public function completeProfile(): Response
    {

        // TODO rajouter les champ prenom etc a la page complete-profile et rediriger a la suite d'une inscription par social.

        return new Response();
    }
}