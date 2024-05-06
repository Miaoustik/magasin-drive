<?php

namespace App\Controller;

use App\Entity\User;
use App\Enum\UserGenreEnum;
use App\Security\AppAuthenticator;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\EnumType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\UX\Turbo\TurboBundle;

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

        $form = $this->createFormBuilder($user, [
            'validation_groups' => ['login']
        ])
            ->add('email', EmailType::class, [
                'label' => 'Email'
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'toggle' => true,
                'use_toggle_form_theme' => false,
                'hidden_label' => '',
                'visible_label' => '',
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

        return $this->render('security/login.html.twig', [
            'search' => false,
            'loginText' => "S'inscrire",
            'loginSign' => false,
            'error' => null,
            'last_username' => null,
            'form' => $form
        ]);
    }

    #[IsGranted('ROLE_USER')]
    #[Route('/remplir-profil', name: 'app_complete_profil')]
    public function completeProfile(
        Request $request,
        EntityManagerInterface $manager
    ): Response
    {
        $user = $this->getUser();

        $form = $this->createFormBuilder($user, [
            'validation_groups' => ['profile']
        ])
            ->add('genre', EnumType::class, [
                'label' => 'Civilité',
                'class' => UserGenreEnum::class,
                'expanded' => true
            ])
            ->add('firstName', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom de famille'
            ])
            ->add('birthDay', BirthdayType::class, [
                'label' => 'Date de naissance',
                'widget' => 'single_text',

            ])
            ->add('phoneNumber', TelType::class, [
                'label' => 'Numéro de téléphone'
            ])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            /** @var User $user */
            $user = $form->getData();
            $user->setCompleted(true);

            $manager->persist($user);
            $manager->flush();

            if (TurboBundle::STREAM_FORMAT === $request->getPreferredFormat()) {

                $request->setRequestFormat(TurboBundle::STREAM_FORMAT);
                return $this->render('toast.html.twig', [
                    'message' => "Votre profil à été mis à jour."
                ]);
            }
        }


        return $this->render('security/complete.html.twig', [
            'form' => $form
        ]);
    }
}