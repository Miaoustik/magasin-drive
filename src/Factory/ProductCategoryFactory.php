<?php

namespace App\Factory;

use App\Entity\ProductCategory;
use App\Repository\ProductCategoryRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<ProductCategory>
 *
 * @method        ProductCategory|Proxy                     create(array|callable $attributes = [])
 * @method static ProductCategory|Proxy                     createOne(array $attributes = [])
 * @method static ProductCategory|Proxy                     find(object|array|mixed $criteria)
 * @method static ProductCategory|Proxy                     findOrCreate(array $attributes)
 * @method static ProductCategory|Proxy                     first(string $sortedField = 'id')
 * @method static ProductCategory|Proxy                     last(string $sortedField = 'id')
 * @method static ProductCategory|Proxy                     random(array $attributes = [])
 * @method static ProductCategory|Proxy                     randomOrCreate(array $attributes = [])
 * @method static ProductCategoryRepository|RepositoryProxy repository()
 * @method static ProductCategory[]|Proxy[]                 all()
 * @method static ProductCategory[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static ProductCategory[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static ProductCategory[]|Proxy[]                 findBy(array $attributes)
 * @method static ProductCategory[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static ProductCategory[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class ProductCategoryFactory extends ModelFactory
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
            // ->afterInstantiate(function(ProductCategory $productCategory): void {})
        ;
    }

    protected static function getClass(): string
    {
        return ProductCategory::class;
    }
}
