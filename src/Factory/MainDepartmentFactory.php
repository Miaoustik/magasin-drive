<?php

namespace App\Factory;

use App\Entity\MainDepartment;
use App\Repository\MainDepartmentRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<MainDepartment>
 *
 * @method        MainDepartment|Proxy                     create(array|callable $attributes = [])
 * @method static MainDepartment|Proxy                     createOne(array $attributes = [])
 * @method static MainDepartment|Proxy                     find(object|array|mixed $criteria)
 * @method static MainDepartment|Proxy                     findOrCreate(array $attributes)
 * @method static MainDepartment|Proxy                     first(string $sortedField = 'id')
 * @method static MainDepartment|Proxy                     last(string $sortedField = 'id')
 * @method static MainDepartment|Proxy                     random(array $attributes = [])
 * @method static MainDepartment|Proxy                     randomOrCreate(array $attributes = [])
 * @method static MainDepartmentRepository|RepositoryProxy repository()
 * @method static MainDepartment[]|Proxy[]                 all()
 * @method static MainDepartment[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static MainDepartment[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static MainDepartment[]|Proxy[]                 findBy(array $attributes)
 * @method static MainDepartment[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static MainDepartment[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class MainDepartmentFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(MainDepartment $mainDepartment): void {})
        ;
    }

    protected static function getClass(): string
    {
        return MainDepartment::class;
    }
}
