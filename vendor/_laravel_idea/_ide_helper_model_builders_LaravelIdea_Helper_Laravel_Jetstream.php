<?php //d8ebb1d4cacc36b4d9e85e5ac933887c
/** @noinspection all */

namespace LaravelIdea\Helper\Laravel\Jetstream {

    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Laravel\Jetstream\TeamInvitation;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;

    /**
     * @method TeamInvitation getOrPut($key, \Closure $value)
     * @method TeamInvitation|$this shift(int $count = 1)
     * @method TeamInvitation firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|$this pop(int $count = 1)
     * @method TeamInvitation|null pull(int|string $key, \Closure $default = null)
     * @method TeamInvitation|null last(callable|null $callback = null, \Closure $default = null)
     * @method TeamInvitation|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method TeamInvitation sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method TeamInvitation|null get(int|null|string $key, \Closure $default = null)
     * @method TeamInvitation|null first(callable|null $callback = null, \Closure $default = null)
     * @method TeamInvitation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TeamInvitation|null find($key, $default = null)
     * @method TeamInvitation[] all()
     */
    class _IH_TeamInvitation_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return TeamInvitation[][]|Collection<_IH_TeamInvitation_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }

    /**
     * @method _IH_TeamInvitation_QB whereId($value)
     * @method _IH_TeamInvitation_QB whereTeamId($value)
     * @method _IH_TeamInvitation_QB whereEmail($value)
     * @method _IH_TeamInvitation_QB whereRole($value)
     * @method _IH_TeamInvitation_QB whereCreatedAt($value)
     * @method _IH_TeamInvitation_QB whereUpdatedAt($value)
     * @method TeamInvitation create(array $attributes = [])
     * @method TeamInvitation createOrFirst(array $attributes = [], array $values = [])
     * @method TeamInvitation createOrRestore($attributes = [], $values = [])
     * @method TeamInvitation createQuietly(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] cursor()
     * @method TeamInvitation[] eagerLoadRelations(array $models)
     * @method TeamInvitation|null|_IH_TeamInvitation_C|TeamInvitation[] find($id, array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrFail($id, array|string $columns = ['*'])
     * @method TeamInvitation|_IH_TeamInvitation_C|TeamInvitation[] findOrNew($id, array|string $columns = ['*'])
     * @method TeamInvitation findSole($id, array|string $columns = ['*'])
     * @method TeamInvitation|null first(array|string $columns = ['*'])
     * @method TeamInvitation firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method TeamInvitation firstOrCreate(array $attributes = [], array $values = [])
     * @method TeamInvitation firstOrFail(array|string $columns = ['*'])
     * @method TeamInvitation firstOrNew(array $attributes = [], array $values = [])
     * @method TeamInvitation|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TeamInvitation forceCreate(array $attributes)
     * @method TeamInvitation forceCreateQuietly(array $attributes = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] get(array|string $columns = ['*'])
     * @method TeamInvitation getModel()
     * @method TeamInvitation[] getModels(array|string $columns = ['*'])
     * @method _IH_TeamInvitation_C|TeamInvitation[] hydrate(array $items)
     * @method TeamInvitation incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazy(int $chunkSize = 1000)
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TeamInvitation_C|TeamInvitation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TeamInvitation make(array $attributes = [])
     * @method TeamInvitation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TeamInvitation[]|_IH_TeamInvitation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method TeamInvitation restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|TeamInvitation[]|_IH_TeamInvitation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TeamInvitation sole(array|string $columns = ['*'])
     * @method TeamInvitation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TeamInvitation_QB extends _BaseBuilder {}
}
