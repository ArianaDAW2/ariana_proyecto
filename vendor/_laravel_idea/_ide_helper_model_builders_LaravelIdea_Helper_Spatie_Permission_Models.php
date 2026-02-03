<?php //29c4ae27a1e008c45e1ed2ba5f1e23e5
/** @noinspection all */

namespace LaravelIdea\Helper\Spatie\Permission\Models {

    use BackedEnum;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission as ContractsPermission;
    use Spatie\Permission\Contracts\Role;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role as ModelsRole;
    
    /**
     * @method Permission getOrPut($key, \Closure $value)
     * @method Permission|$this shift(int $count = 1)
     * @method Permission firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null pull(int|string $key, \Closure $default = null)
     * @method Permission|null last(callable|null $callback = null, \Closure $default = null)
     * @method Permission|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Permission sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Permission|null get(int|null|string $key, \Closure $default = null)
     * @method Permission|null first(callable|null $callback = null, \Closure $default = null)
     * @method Permission|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Permission[][]|Collection<_IH_Permission_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereName($value)
     * @method _IH_Permission_QB whereGuardName($value)
     * @method _IH_Permission_QB whereCreatedAt($value)
     * @method _IH_Permission_QB whereUpdatedAt($value)
     * @method Permission create(array $attributes = [])
     * @method Permission createOrFirst(array $attributes = [], array $values = [])
     * @method Permission createOrRestore($attributes = [], $values = [])
     * @method Permission createQuietly(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission[] eagerLoadRelations(array $models)
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array|string $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array|string $columns = ['*'])
     * @method Permission findSole($id, array|string $columns = ['*'])
     * @method Permission|null first(array|string $columns = ['*'])
     * @method Permission firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array|string $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method Permission forceCreateQuietly(array $attributes = [])
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method Permission incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Permission_C|Permission[] lazy(int $chunkSize = 1000)
     * @method _IH_Permission_C|Permission[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Permission_C|Permission[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Permission restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Permission_QB permission(array|BackedEnum|Collection|int|ContractsPermission|string $permissions, bool $without = false)
     * @method _IH_Permission_QB role(array|BackedEnum|Collection|int|Role|string $roles, string $guard = null, bool $without = false)
     * @method _IH_Permission_QB withoutPermission(array|BackedEnum|Collection|int|ContractsPermission|string $permissions)
     * @method _IH_Permission_QB withoutRole(array|BackedEnum|Collection|int|Role|string $roles, string $guard = null)
     */
    class _IH_Permission_QB extends _BaseBuilder {}
    
    /**
     * @method ModelsRole getOrPut($key, \Closure $value)
     * @method ModelsRole|$this shift(int $count = 1)
     * @method ModelsRole firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ModelsRole|$this pop(int $count = 1)
     * @method ModelsRole|null pull(int|string $key, \Closure $default = null)
     * @method ModelsRole|null last(callable|null $callback = null, \Closure $default = null)
     * @method ModelsRole|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method ModelsRole sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method ModelsRole|null get(int|null|string $key, \Closure $default = null)
     * @method ModelsRole|null first(callable|null $callback = null, \Closure $default = null)
     * @method ModelsRole|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ModelsRole|null find($key, $default = null)
     * @method ModelsRole[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return ModelsRole[][]|Collection<_IH_Role_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereTeamId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereGuardName($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method _IH_Role_QB whereUpdatedAt($value)
     * @method ModelsRole create(array $attributes = [])
     * @method ModelsRole createOrFirst(array $attributes = [], array $values = [])
     * @method ModelsRole createOrRestore($attributes = [], $values = [])
     * @method ModelsRole createQuietly(array $attributes = [])
     * @method _IH_Role_C|ModelsRole[] cursor()
     * @method ModelsRole[] eagerLoadRelations(array $models)
     * @method ModelsRole|null|_IH_Role_C|ModelsRole[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|ModelsRole[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ModelsRole|_IH_Role_C|ModelsRole[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method ModelsRole|_IH_Role_C|ModelsRole[] findOrFail($id, array|string $columns = ['*'])
     * @method ModelsRole|_IH_Role_C|ModelsRole[] findOrNew($id, array|string $columns = ['*'])
     * @method ModelsRole findSole($id, array|string $columns = ['*'])
     * @method ModelsRole|null first(array|string $columns = ['*'])
     * @method ModelsRole firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method ModelsRole firstOrCreate(array $attributes = [], array $values = [])
     * @method ModelsRole firstOrFail(array|string $columns = ['*'])
     * @method ModelsRole firstOrNew(array $attributes = [], array $values = [])
     * @method ModelsRole|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ModelsRole forceCreate(array $attributes)
     * @method ModelsRole forceCreateQuietly(array $attributes = [])
     * @method _IH_Role_C|ModelsRole[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|ModelsRole[] get(array|string $columns = ['*'])
     * @method ModelsRole getModel()
     * @method ModelsRole[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|ModelsRole[] hydrate(array $items)
     * @method ModelsRole incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Role_C|ModelsRole[] lazy(int $chunkSize = 1000)
     * @method _IH_Role_C|ModelsRole[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Role_C|ModelsRole[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ModelsRole make(array $attributes = [])
     * @method ModelsRole newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ModelsRole[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method ModelsRole restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|ModelsRole[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ModelsRole sole(array|string $columns = ['*'])
     * @method ModelsRole updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Role_QB permission(array|BackedEnum|Collection|int|ContractsPermission|string $permissions, bool $without = false)
     * @method _IH_Role_QB withoutPermission(array|BackedEnum|Collection|int|ContractsPermission|string $permissions)
     */
    class _IH_Role_QB extends _BaseBuilder {}
}