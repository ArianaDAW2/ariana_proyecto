<?php //b075ec1acb1d5732210a73879febb8b0
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Sanctum {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method PersonalAccessToken getOrPut($key, \Closure $value)
     * @method PersonalAccessToken|$this shift(int $count = 1)
     * @method PersonalAccessToken firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|$this pop(int $count = 1)
     * @method PersonalAccessToken|null pull(int|string $key, \Closure $default = null)
     * @method PersonalAccessToken|null last(callable|null $callback = null, \Closure $default = null)
     * @method PersonalAccessToken|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method PersonalAccessToken sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method PersonalAccessToken|null get(int|null|string $key, \Closure $default = null)
     * @method PersonalAccessToken|null first(callable|null $callback = null, \Closure $default = null)
     * @method PersonalAccessToken|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PersonalAccessToken|null find($key, $default = null)
     * @method PersonalAccessToken[] all()
     */
    class _IH_PersonalAccessToken_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return PersonalAccessToken[][]|Collection<_IH_PersonalAccessToken_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_PersonalAccessToken_QB whereId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableId($value)
     * @method _IH_PersonalAccessToken_QB whereTokenableType($value)
     * @method _IH_PersonalAccessToken_QB whereName($value)
     * @method _IH_PersonalAccessToken_QB whereToken($value)
     * @method _IH_PersonalAccessToken_QB whereAbilities($value)
     * @method _IH_PersonalAccessToken_QB whereLastUsedAt($value)
     * @method _IH_PersonalAccessToken_QB whereExpiresAt($value)
     * @method _IH_PersonalAccessToken_QB whereCreatedAt($value)
     * @method _IH_PersonalAccessToken_QB whereUpdatedAt($value)
     * @method PersonalAccessToken create(array $attributes = [])
     * @method PersonalAccessToken createOrFirst(array $attributes = [], array $values = [])
     * @method PersonalAccessToken createOrRestore($attributes = [], $values = [])
     * @method PersonalAccessToken createQuietly(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] cursor()
     * @method PersonalAccessToken[] eagerLoadRelations(array $models)
     * @method PersonalAccessToken|null|_IH_PersonalAccessToken_C|PersonalAccessToken[] find($id, array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrFail($id, array|string $columns = ['*'])
     * @method PersonalAccessToken|_IH_PersonalAccessToken_C|PersonalAccessToken[] findOrNew($id, array|string $columns = ['*'])
     * @method PersonalAccessToken findSole($id, array|string $columns = ['*'])
     * @method PersonalAccessToken|null first(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method PersonalAccessToken firstOrCreate(array $attributes = [], array $values = [])
     * @method PersonalAccessToken firstOrFail(array|string $columns = ['*'])
     * @method PersonalAccessToken firstOrNew(array $attributes = [], array $values = [])
     * @method PersonalAccessToken|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PersonalAccessToken forceCreate(array $attributes)
     * @method PersonalAccessToken forceCreateQuietly(array $attributes = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] get(array|string $columns = ['*'])
     * @method PersonalAccessToken getModel()
     * @method PersonalAccessToken[] getModels(array|string $columns = ['*'])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] hydrate(array $items)
     * @method PersonalAccessToken incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazy(int $chunkSize = 1000)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PersonalAccessToken_C|PersonalAccessToken[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PersonalAccessToken make(array $attributes = [])
     * @method PersonalAccessToken newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method PersonalAccessToken restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|PersonalAccessToken[]|_IH_PersonalAccessToken_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PersonalAccessToken sole(array|string $columns = ['*'])
     * @method PersonalAccessToken updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PersonalAccessToken_QB extends _BaseBuilder {}
}
