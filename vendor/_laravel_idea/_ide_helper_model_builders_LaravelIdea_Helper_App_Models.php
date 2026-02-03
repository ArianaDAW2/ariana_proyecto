<?php //dbb44700c31de2357b9c0c31d06331ad
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\Invoice;
    use App\Models\MedicalRecord;
    use App\Models\Membership;
    use App\Models\Payment;
    use App\Models\Pet;
    use App\Models\Reservation;
    use App\Models\ReservationService;
    use App\Models\Service;
    use App\Models\Team;
    use App\Models\TeamInvitation;
    use App\Models\User;
    use BackedEnum;
    use Illuminate\Contracts\Database\Query\Expression;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    
    /**
     * @method Invoice getOrPut($key, \Closure $value)
     * @method Invoice|$this shift(int $count = 1)
     * @method Invoice firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Invoice|$this pop(int $count = 1)
     * @method Invoice|null pull(int|string $key, \Closure $default = null)
     * @method Invoice|null last(callable|null $callback = null, \Closure $default = null)
     * @method Invoice|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Invoice sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Invoice|null get(int|null|string $key, \Closure $default = null)
     * @method Invoice|null first(callable|null $callback = null, \Closure $default = null)
     * @method Invoice|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Invoice|null find($key, $default = null)
     * @method Invoice[] all()
     */
    class _IH_Invoice_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Invoice[][]|Collection<_IH_Invoice_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Invoice_QB whereId($value)
     * @method _IH_Invoice_QB whereReservationId($value)
     * @method _IH_Invoice_QB whereInvoiceNumber($value)
     * @method _IH_Invoice_QB whereTotal($value)
     * @method _IH_Invoice_QB whereStatus($value)
     * @method _IH_Invoice_QB whereIssuedAt($value)
     * @method _IH_Invoice_QB whereCreatedAt($value)
     * @method _IH_Invoice_QB whereUpdatedAt($value)
     * @method _IH_Invoice_QB whereDeletedAt($value)
     * @method Invoice create(array $attributes = [])
     * @method Invoice createOrFirst(array $attributes = [], array $values = [])
     * @method Invoice createOrRestore($attributes = [], $values = [])
     * @method Invoice createQuietly(array $attributes = [])
     * @method _IH_Invoice_C|Invoice[] cursor()
     * @method Invoice[] eagerLoadRelations(array $models)
     * @method Invoice|null|_IH_Invoice_C|Invoice[] find($id, array|string $columns = ['*'])
     * @method _IH_Invoice_C|Invoice[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Invoice|_IH_Invoice_C|Invoice[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Invoice|_IH_Invoice_C|Invoice[] findOrFail($id, array|string $columns = ['*'])
     * @method Invoice|_IH_Invoice_C|Invoice[] findOrNew($id, array|string $columns = ['*'])
     * @method Invoice findSole($id, array|string $columns = ['*'])
     * @method Invoice|null first(array|string $columns = ['*'])
     * @method Invoice firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Invoice firstOrCreate(array $attributes = [], array $values = [])
     * @method Invoice firstOrFail(array|string $columns = ['*'])
     * @method Invoice firstOrNew(array $attributes = [], array $values = [])
     * @method Invoice|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Invoice forceCreate(array $attributes)
     * @method Invoice forceCreateQuietly(array $attributes = [])
     * @method _IH_Invoice_C|Invoice[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Invoice_C|Invoice[] get(array|string $columns = ['*'])
     * @method Invoice getModel()
     * @method Invoice[] getModels(array|string $columns = ['*'])
     * @method _IH_Invoice_C|Invoice[] hydrate(array $items)
     * @method Invoice incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Invoice_C|Invoice[] lazy(int $chunkSize = 1000)
     * @method _IH_Invoice_C|Invoice[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Invoice_C|Invoice[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Invoice make(array $attributes = [])
     * @method Invoice newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Invoice[]|_IH_Invoice_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Invoice restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Invoice[]|_IH_Invoice_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Invoice sole(array|string $columns = ['*'])
     * @method Invoice updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Invoice_QB overdue(int $days = 30)
     * @method _IH_Invoice_QB withTotalPaid()
     */
    class _IH_Invoice_QB extends _BaseBuilder {}
    
    /**
     * @method MedicalRecord getOrPut($key, \Closure $value)
     * @method MedicalRecord|$this shift(int $count = 1)
     * @method MedicalRecord firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MedicalRecord|$this pop(int $count = 1)
     * @method MedicalRecord|null pull(int|string $key, \Closure $default = null)
     * @method MedicalRecord|null last(callable|null $callback = null, \Closure $default = null)
     * @method MedicalRecord|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method MedicalRecord sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method MedicalRecord|null get(int|null|string $key, \Closure $default = null)
     * @method MedicalRecord|null first(callable|null $callback = null, \Closure $default = null)
     * @method MedicalRecord|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MedicalRecord|null find($key, $default = null)
     * @method MedicalRecord[] all()
     */
    class _IH_MedicalRecord_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return MedicalRecord[][]|Collection<_IH_MedicalRecord_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_MedicalRecord_QB whereId($value)
     * @method _IH_MedicalRecord_QB wherePetId($value)
     * @method _IH_MedicalRecord_QB whereVeterinarianId($value)
     * @method _IH_MedicalRecord_QB whereDiagnosis($value)
     * @method _IH_MedicalRecord_QB whereTreatment($value)
     * @method _IH_MedicalRecord_QB whereNotes($value)
     * @method _IH_MedicalRecord_QB whereCreatedAt($value)
     * @method _IH_MedicalRecord_QB whereUpdatedAt($value)
     * @method _IH_MedicalRecord_QB whereDeletedAt($value)
     * @method MedicalRecord create(array $attributes = [])
     * @method MedicalRecord createOrFirst(array $attributes = [], array $values = [])
     * @method MedicalRecord createOrRestore($attributes = [], $values = [])
     * @method MedicalRecord createQuietly(array $attributes = [])
     * @method _IH_MedicalRecord_C|MedicalRecord[] cursor()
     * @method MedicalRecord[] eagerLoadRelations(array $models)
     * @method MedicalRecord|null|_IH_MedicalRecord_C|MedicalRecord[] find($id, array|string $columns = ['*'])
     * @method _IH_MedicalRecord_C|MedicalRecord[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MedicalRecord|_IH_MedicalRecord_C|MedicalRecord[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method MedicalRecord|_IH_MedicalRecord_C|MedicalRecord[] findOrFail($id, array|string $columns = ['*'])
     * @method MedicalRecord|_IH_MedicalRecord_C|MedicalRecord[] findOrNew($id, array|string $columns = ['*'])
     * @method MedicalRecord findSole($id, array|string $columns = ['*'])
     * @method MedicalRecord|null first(array|string $columns = ['*'])
     * @method MedicalRecord firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method MedicalRecord firstOrCreate(array $attributes = [], array $values = [])
     * @method MedicalRecord firstOrFail(array|string $columns = ['*'])
     * @method MedicalRecord firstOrNew(array $attributes = [], array $values = [])
     * @method MedicalRecord|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MedicalRecord forceCreate(array $attributes)
     * @method MedicalRecord forceCreateQuietly(array $attributes = [])
     * @method _IH_MedicalRecord_C|MedicalRecord[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MedicalRecord_C|MedicalRecord[] get(array|string $columns = ['*'])
     * @method MedicalRecord getModel()
     * @method MedicalRecord[] getModels(array|string $columns = ['*'])
     * @method _IH_MedicalRecord_C|MedicalRecord[] hydrate(array $items)
     * @method MedicalRecord incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_MedicalRecord_C|MedicalRecord[] lazy(int $chunkSize = 1000)
     * @method _IH_MedicalRecord_C|MedicalRecord[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_MedicalRecord_C|MedicalRecord[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method MedicalRecord make(array $attributes = [])
     * @method MedicalRecord newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MedicalRecord[]|_IH_MedicalRecord_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method MedicalRecord restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|MedicalRecord[]|_IH_MedicalRecord_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MedicalRecord sole(array|string $columns = ['*'])
     * @method MedicalRecord updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MedicalRecord_QB extends _BaseBuilder {}
    
    /**
     * @method Membership getOrPut($key, \Closure $value)
     * @method Membership|$this shift(int $count = 1)
     * @method Membership firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Membership|$this pop(int $count = 1)
     * @method Membership|null pull(int|string $key, \Closure $default = null)
     * @method Membership|null last(callable|null $callback = null, \Closure $default = null)
     * @method Membership|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Membership sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Membership|null get(int|null|string $key, \Closure $default = null)
     * @method Membership|null first(callable|null $callback = null, \Closure $default = null)
     * @method Membership|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Membership|null find($key, $default = null)
     * @method Membership[] all()
     */
    class _IH_Membership_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Membership[][]|Collection<_IH_Membership_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Membership_QB whereId($value)
     * @method _IH_Membership_QB whereTeamId($value)
     * @method _IH_Membership_QB whereUserId($value)
     * @method _IH_Membership_QB whereRole($value)
     * @method _IH_Membership_QB whereCreatedAt($value)
     * @method _IH_Membership_QB whereUpdatedAt($value)
     * @method Membership create(array $attributes = [])
     * @method Membership createOrFirst(array $attributes = [], array $values = [])
     * @method Membership createOrRestore($attributes = [], $values = [])
     * @method Membership createQuietly(array $attributes = [])
     * @method _IH_Membership_C|Membership[] cursor()
     * @method Membership[] eagerLoadRelations(array $models)
     * @method Membership|null|_IH_Membership_C|Membership[] find($id, array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Membership|_IH_Membership_C|Membership[] findOrFail($id, array|string $columns = ['*'])
     * @method Membership|_IH_Membership_C|Membership[] findOrNew($id, array|string $columns = ['*'])
     * @method Membership findSole($id, array|string $columns = ['*'])
     * @method Membership|null first(array|string $columns = ['*'])
     * @method Membership firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Membership firstOrCreate(array $attributes = [], array $values = [])
     * @method Membership firstOrFail(array|string $columns = ['*'])
     * @method Membership firstOrNew(array $attributes = [], array $values = [])
     * @method Membership|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Membership forceCreate(array $attributes)
     * @method Membership forceCreateQuietly(array $attributes = [])
     * @method _IH_Membership_C|Membership[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Membership_C|Membership[] get(array|string $columns = ['*'])
     * @method Membership getModel()
     * @method Membership[] getModels(array|string $columns = ['*'])
     * @method _IH_Membership_C|Membership[] hydrate(array $items)
     * @method Membership incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Membership_C|Membership[] lazy(int $chunkSize = 1000)
     * @method _IH_Membership_C|Membership[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Membership_C|Membership[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Membership make(array $attributes = [])
     * @method Membership newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Membership[]|_IH_Membership_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Membership restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Membership[]|_IH_Membership_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Membership sole(array|string $columns = ['*'])
     * @method Membership updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Membership_QB extends _BaseBuilder {}
    
    /**
     * @method Payment getOrPut($key, \Closure $value)
     * @method Payment|$this shift(int $count = 1)
     * @method Payment firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Payment|$this pop(int $count = 1)
     * @method Payment|null pull(int|string $key, \Closure $default = null)
     * @method Payment|null last(callable|null $callback = null, \Closure $default = null)
     * @method Payment|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Payment sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Payment|null get(int|null|string $key, \Closure $default = null)
     * @method Payment|null first(callable|null $callback = null, \Closure $default = null)
     * @method Payment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Payment|null find($key, $default = null)
     * @method Payment[] all()
     */
    class _IH_Payment_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Payment[][]|Collection<_IH_Payment_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Payment_QB whereId($value)
     * @method _IH_Payment_QB whereInvoiceId($value)
     * @method _IH_Payment_QB whereUserId($value)
     * @method _IH_Payment_QB whereAmount($value)
     * @method _IH_Payment_QB wherePaymentMethod($value)
     * @method _IH_Payment_QB whereStatus($value)
     * @method _IH_Payment_QB whereTransactionId($value)
     * @method _IH_Payment_QB wherePaidAt($value)
     * @method _IH_Payment_QB whereCreatedAt($value)
     * @method _IH_Payment_QB whereUpdatedAt($value)
     * @method Payment create(array $attributes = [])
     * @method Payment createOrFirst(array $attributes = [], array $values = [])
     * @method Payment createOrRestore($attributes = [], $values = [])
     * @method Payment createQuietly(array $attributes = [])
     * @method _IH_Payment_C|Payment[] cursor()
     * @method Payment[] eagerLoadRelations(array $models)
     * @method Payment|null|_IH_Payment_C|Payment[] find($id, array|string $columns = ['*'])
     * @method _IH_Payment_C|Payment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Payment|_IH_Payment_C|Payment[] findOrFail($id, array|string $columns = ['*'])
     * @method Payment|_IH_Payment_C|Payment[] findOrNew($id, array|string $columns = ['*'])
     * @method Payment findSole($id, array|string $columns = ['*'])
     * @method Payment|null first(array|string $columns = ['*'])
     * @method Payment firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Payment firstOrCreate(array $attributes = [], array $values = [])
     * @method Payment firstOrFail(array|string $columns = ['*'])
     * @method Payment firstOrNew(array $attributes = [], array $values = [])
     * @method Payment|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payment forceCreate(array $attributes)
     * @method Payment forceCreateQuietly(array $attributes = [])
     * @method _IH_Payment_C|Payment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Payment_C|Payment[] get(array|string $columns = ['*'])
     * @method Payment getModel()
     * @method Payment[] getModels(array|string $columns = ['*'])
     * @method _IH_Payment_C|Payment[] hydrate(array $items)
     * @method Payment incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Payment_C|Payment[] lazy(int $chunkSize = 1000)
     * @method _IH_Payment_C|Payment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Payment_C|Payment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Payment make(array $attributes = [])
     * @method Payment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payment[]|_IH_Payment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Payment restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Payment[]|_IH_Payment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payment sole(array|string $columns = ['*'])
     * @method Payment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Payment_QB extends _BaseBuilder {}
    
    /**
     * @method Pet getOrPut($key, \Closure $value)
     * @method Pet|$this shift(int $count = 1)
     * @method Pet firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Pet|$this pop(int $count = 1)
     * @method Pet|null pull(int|string $key, \Closure $default = null)
     * @method Pet|null last(callable|null $callback = null, \Closure $default = null)
     * @method Pet|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Pet sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Pet|null get(int|null|string $key, \Closure $default = null)
     * @method Pet|null first(callable|null $callback = null, \Closure $default = null)
     * @method Pet|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Pet|null find($key, $default = null)
     * @method Pet[] all()
     */
    class _IH_Pet_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Pet[][]|Collection<_IH_Pet_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Pet_QB whereId($value)
     * @method _IH_Pet_QB whereUserId($value)
     * @method _IH_Pet_QB whereName($value)
     * @method _IH_Pet_QB whereSpecies($value)
     * @method _IH_Pet_QB whereBreed($value)
     * @method _IH_Pet_QB whereAge($value)
     * @method _IH_Pet_QB whereWeight($value)
     * @method _IH_Pet_QB whereNotes($value)
     * @method _IH_Pet_QB whereCreatedAt($value)
     * @method _IH_Pet_QB whereUpdatedAt($value)
     * @method _IH_Pet_QB whereDeletedAt($value)
     * @method Pet create(array $attributes = [])
     * @method Pet createOrFirst(array $attributes = [], array $values = [])
     * @method Pet createOrRestore($attributes = [], $values = [])
     * @method Pet createQuietly(array $attributes = [])
     * @method _IH_Pet_C|Pet[] cursor()
     * @method Pet[] eagerLoadRelations(array $models)
     * @method Pet|null|_IH_Pet_C|Pet[] find($id, array|string $columns = ['*'])
     * @method _IH_Pet_C|Pet[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Pet|_IH_Pet_C|Pet[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Pet|_IH_Pet_C|Pet[] findOrFail($id, array|string $columns = ['*'])
     * @method Pet|_IH_Pet_C|Pet[] findOrNew($id, array|string $columns = ['*'])
     * @method Pet findSole($id, array|string $columns = ['*'])
     * @method Pet|null first(array|string $columns = ['*'])
     * @method Pet firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Pet firstOrCreate(array $attributes = [], array $values = [])
     * @method Pet firstOrFail(array|string $columns = ['*'])
     * @method Pet firstOrNew(array $attributes = [], array $values = [])
     * @method Pet|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Pet forceCreate(array $attributes)
     * @method Pet forceCreateQuietly(array $attributes = [])
     * @method _IH_Pet_C|Pet[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Pet_C|Pet[] get(array|string $columns = ['*'])
     * @method Pet getModel()
     * @method Pet[] getModels(array|string $columns = ['*'])
     * @method _IH_Pet_C|Pet[] hydrate(array $items)
     * @method Pet incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Pet_C|Pet[] lazy(int $chunkSize = 1000)
     * @method _IH_Pet_C|Pet[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Pet_C|Pet[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Pet make(array $attributes = [])
     * @method Pet newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Pet[]|_IH_Pet_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Pet restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Pet[]|_IH_Pet_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Pet sole(array|string $columns = ['*'])
     * @method Pet updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Pet_QB withRecentMedicalHistory(int $days = 30)
     */
    class _IH_Pet_QB extends _BaseBuilder {}
    
    /**
     * @method ReservationService getOrPut($key, \Closure $value)
     * @method ReservationService|$this shift(int $count = 1)
     * @method ReservationService firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReservationService|$this pop(int $count = 1)
     * @method ReservationService|null pull(int|string $key, \Closure $default = null)
     * @method ReservationService|null last(callable|null $callback = null, \Closure $default = null)
     * @method ReservationService|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method ReservationService sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method ReservationService|null get(int|null|string $key, \Closure $default = null)
     * @method ReservationService|null first(callable|null $callback = null, \Closure $default = null)
     * @method ReservationService|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReservationService|null find($key, $default = null)
     * @method ReservationService[] all()
     */
    class _IH_ReservationService_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return ReservationService[][]|Collection<_IH_ReservationService_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ReservationService_QB whereId($value)
     * @method _IH_ReservationService_QB whereReservationId($value)
     * @method _IH_ReservationService_QB whereServiceId($value)
     * @method _IH_ReservationService_QB wherePrice($value)
     * @method _IH_ReservationService_QB whereDuration($value)
     * @method _IH_ReservationService_QB whereNotes($value)
     * @method _IH_ReservationService_QB whereCreatedAt($value)
     * @method _IH_ReservationService_QB whereUpdatedAt($value)
     * @method ReservationService create(array $attributes = [])
     * @method ReservationService createOrFirst(array $attributes = [], array $values = [])
     * @method ReservationService createOrRestore($attributes = [], $values = [])
     * @method ReservationService createQuietly(array $attributes = [])
     * @method _IH_ReservationService_C|ReservationService[] cursor()
     * @method ReservationService[] eagerLoadRelations(array $models)
     * @method ReservationService|null|_IH_ReservationService_C|ReservationService[] find($id, array|string $columns = ['*'])
     * @method _IH_ReservationService_C|ReservationService[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReservationService|_IH_ReservationService_C|ReservationService[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method ReservationService|_IH_ReservationService_C|ReservationService[] findOrFail($id, array|string $columns = ['*'])
     * @method ReservationService|_IH_ReservationService_C|ReservationService[] findOrNew($id, array|string $columns = ['*'])
     * @method ReservationService findSole($id, array|string $columns = ['*'])
     * @method ReservationService|null first(array|string $columns = ['*'])
     * @method ReservationService firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method ReservationService firstOrCreate(array $attributes = [], array $values = [])
     * @method ReservationService firstOrFail(array|string $columns = ['*'])
     * @method ReservationService firstOrNew(array $attributes = [], array $values = [])
     * @method ReservationService|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReservationService forceCreate(array $attributes)
     * @method ReservationService forceCreateQuietly(array $attributes = [])
     * @method _IH_ReservationService_C|ReservationService[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReservationService_C|ReservationService[] get(array|string $columns = ['*'])
     * @method ReservationService getModel()
     * @method ReservationService[] getModels(array|string $columns = ['*'])
     * @method _IH_ReservationService_C|ReservationService[] hydrate(array $items)
     * @method ReservationService incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_ReservationService_C|ReservationService[] lazy(int $chunkSize = 1000)
     * @method _IH_ReservationService_C|ReservationService[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ReservationService_C|ReservationService[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ReservationService make(array $attributes = [])
     * @method ReservationService newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReservationService[]|_IH_ReservationService_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method ReservationService restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|ReservationService[]|_IH_ReservationService_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReservationService sole(array|string $columns = ['*'])
     * @method ReservationService updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReservationService_QB extends _BaseBuilder {}
    
    /**
     * @method Reservation getOrPut($key, \Closure $value)
     * @method Reservation|$this shift(int $count = 1)
     * @method Reservation firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Reservation|$this pop(int $count = 1)
     * @method Reservation|null pull(int|string $key, \Closure $default = null)
     * @method Reservation|null last(callable|null $callback = null, \Closure $default = null)
     * @method Reservation|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Reservation sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Reservation|null get(int|null|string $key, \Closure $default = null)
     * @method Reservation|null first(callable|null $callback = null, \Closure $default = null)
     * @method Reservation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Reservation|null find($key, $default = null)
     * @method Reservation[] all()
     */
    class _IH_Reservation_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Reservation[][]|Collection<_IH_Reservation_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Reservation_QB whereId($value)
     * @method _IH_Reservation_QB whereUserId($value)
     * @method _IH_Reservation_QB wherePetId($value)
     * @method _IH_Reservation_QB whereStartDate($value)
     * @method _IH_Reservation_QB whereEndDate($value)
     * @method _IH_Reservation_QB whereStatus($value)
     * @method _IH_Reservation_QB whereTotalPrice($value)
     * @method _IH_Reservation_QB whereCreatedAt($value)
     * @method _IH_Reservation_QB whereUpdatedAt($value)
     * @method _IH_Reservation_QB whereDeletedAt($value)
     * @method Reservation create(array $attributes = [])
     * @method Reservation createOrFirst(array $attributes = [], array $values = [])
     * @method Reservation createOrRestore($attributes = [], $values = [])
     * @method Reservation createQuietly(array $attributes = [])
     * @method _IH_Reservation_C|Reservation[] cursor()
     * @method Reservation[] eagerLoadRelations(array $models)
     * @method Reservation|null|_IH_Reservation_C|Reservation[] find($id, array|string $columns = ['*'])
     * @method _IH_Reservation_C|Reservation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Reservation|_IH_Reservation_C|Reservation[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Reservation|_IH_Reservation_C|Reservation[] findOrFail($id, array|string $columns = ['*'])
     * @method Reservation|_IH_Reservation_C|Reservation[] findOrNew($id, array|string $columns = ['*'])
     * @method Reservation findSole($id, array|string $columns = ['*'])
     * @method Reservation|null first(array|string $columns = ['*'])
     * @method Reservation firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Reservation firstOrCreate(array $attributes = [], array $values = [])
     * @method Reservation firstOrFail(array|string $columns = ['*'])
     * @method Reservation firstOrNew(array $attributes = [], array $values = [])
     * @method Reservation|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Reservation forceCreate(array $attributes)
     * @method Reservation forceCreateQuietly(array $attributes = [])
     * @method _IH_Reservation_C|Reservation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Reservation_C|Reservation[] get(array|string $columns = ['*'])
     * @method Reservation getModel()
     * @method Reservation[] getModels(array|string $columns = ['*'])
     * @method _IH_Reservation_C|Reservation[] hydrate(array $items)
     * @method Reservation incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Reservation_C|Reservation[] lazy(int $chunkSize = 1000)
     * @method _IH_Reservation_C|Reservation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Reservation_C|Reservation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Reservation make(array $attributes = [])
     * @method Reservation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Reservation[]|_IH_Reservation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Reservation restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Reservation[]|_IH_Reservation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Reservation sole(array|string $columns = ['*'])
     * @method Reservation updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Reservation_QB completedBetween($startDate, $endDate)
     * @method _IH_Reservation_QB overlapping($startDate, $endDate)
     * @method _IH_Reservation_QB status(string $status)
     * @method _IH_Reservation_QB withRevenueStats()
     */
    class _IH_Reservation_QB extends _BaseBuilder {}
    
    /**
     * @method Service getOrPut($key, \Closure $value)
     * @method Service|$this shift(int $count = 1)
     * @method Service firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Service|$this pop(int $count = 1)
     * @method Service|null pull(int|string $key, \Closure $default = null)
     * @method Service|null last(callable|null $callback = null, \Closure $default = null)
     * @method Service|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Service sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Service|null get(int|null|string $key, \Closure $default = null)
     * @method Service|null first(callable|null $callback = null, \Closure $default = null)
     * @method Service|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Service|null find($key, $default = null)
     * @method Service[] all()
     */
    class _IH_Service_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Service[][]|Collection<_IH_Service_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Service_QB whereId($value)
     * @method _IH_Service_QB whereName($value)
     * @method _IH_Service_QB whereDescription($value)
     * @method _IH_Service_QB whereBasePrice($value)
     * @method _IH_Service_QB whereIsActive($value)
     * @method _IH_Service_QB whereCreatedAt($value)
     * @method _IH_Service_QB whereUpdatedAt($value)
     * @method Service create(array $attributes = [])
     * @method Service createOrFirst(array $attributes = [], array $values = [])
     * @method Service createOrRestore($attributes = [], $values = [])
     * @method Service createQuietly(array $attributes = [])
     * @method _IH_Service_C|Service[] cursor()
     * @method Service[] eagerLoadRelations(array $models)
     * @method Service|null|_IH_Service_C|Service[] find($id, array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Service|_IH_Service_C|Service[] findOrFail($id, array|string $columns = ['*'])
     * @method Service|_IH_Service_C|Service[] findOrNew($id, array|string $columns = ['*'])
     * @method Service findSole($id, array|string $columns = ['*'])
     * @method Service|null first(array|string $columns = ['*'])
     * @method Service firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Service firstOrCreate(array $attributes = [], array $values = [])
     * @method Service firstOrFail(array|string $columns = ['*'])
     * @method Service firstOrNew(array $attributes = [], array $values = [])
     * @method Service|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Service forceCreate(array $attributes)
     * @method Service forceCreateQuietly(array $attributes = [])
     * @method _IH_Service_C|Service[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Service_C|Service[] get(array|string $columns = ['*'])
     * @method Service getModel()
     * @method Service[] getModels(array|string $columns = ['*'])
     * @method _IH_Service_C|Service[] hydrate(array $items)
     * @method Service incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Service_C|Service[] lazy(int $chunkSize = 1000)
     * @method _IH_Service_C|Service[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Service_C|Service[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Service make(array $attributes = [])
     * @method Service newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Service[]|_IH_Service_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Service restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Service[]|_IH_Service_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Service sole(array|string $columns = ['*'])
     * @method Service updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Service_QB active()
     */
    class _IH_Service_QB extends _BaseBuilder {}
    
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
    
    /**
     * @method Team getOrPut($key, \Closure $value)
     * @method Team|$this shift(int $count = 1)
     * @method Team firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Team|$this pop(int $count = 1)
     * @method Team|null pull(int|string $key, \Closure $default = null)
     * @method Team|null last(callable|null $callback = null, \Closure $default = null)
     * @method Team|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method Team sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method Team|null get(int|null|string $key, \Closure $default = null)
     * @method Team|null first(callable|null $callback = null, \Closure $default = null)
     * @method Team|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Team|null find($key, $default = null)
     * @method Team[] all()
     */
    class _IH_Team_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return Team[][]|Collection<_IH_Team_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Team_QB whereId($value)
     * @method _IH_Team_QB whereUserId($value)
     * @method _IH_Team_QB whereName($value)
     * @method _IH_Team_QB wherePersonalTeam($value)
     * @method _IH_Team_QB whereCreatedAt($value)
     * @method _IH_Team_QB whereUpdatedAt($value)
     * @method Team create(array $attributes = [])
     * @method Team createOrFirst(array $attributes = [], array $values = [])
     * @method Team createOrRestore($attributes = [], $values = [])
     * @method Team createQuietly(array $attributes = [])
     * @method _IH_Team_C|Team[] cursor()
     * @method Team[] eagerLoadRelations(array $models)
     * @method Team|null|_IH_Team_C|Team[] find($id, array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Team|_IH_Team_C|Team[] findOrFail($id, array|string $columns = ['*'])
     * @method Team|_IH_Team_C|Team[] findOrNew($id, array|string $columns = ['*'])
     * @method Team findSole($id, array|string $columns = ['*'])
     * @method Team|null first(array|string $columns = ['*'])
     * @method Team firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method Team firstOrCreate(array $attributes = [], array $values = [])
     * @method Team firstOrFail(array|string $columns = ['*'])
     * @method Team firstOrNew(array $attributes = [], array $values = [])
     * @method Team|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Team forceCreate(array $attributes)
     * @method Team forceCreateQuietly(array $attributes = [])
     * @method _IH_Team_C|Team[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Team_C|Team[] get(array|string $columns = ['*'])
     * @method Team getModel()
     * @method Team[] getModels(array|string $columns = ['*'])
     * @method _IH_Team_C|Team[] hydrate(array $items)
     * @method Team incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_Team_C|Team[] lazy(int $chunkSize = 1000)
     * @method _IH_Team_C|Team[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Team_C|Team[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Team make(array $attributes = [])
     * @method Team newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Team[]|_IH_Team_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method Team restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|Team[]|_IH_Team_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Team sole(array|string $columns = ['*'])
     * @method Team updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Team_QB extends _BaseBuilder {}
    
    /**
     * @method User getOrPut($key, \Closure $value)
     * @method User|$this shift(int $count = 1)
     * @method User firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method User|$this pop(int $count = 1)
     * @method User|null pull(int|string $key, \Closure $default = null)
     * @method User|null last(callable|null $callback = null, \Closure $default = null)
     * @method User|$this random(callable|int|null $number = null, bool $preserveKeys = false)
     * @method User sole(callable|null|string $key = null, $operator = null, $value = null)
     * @method User|null get(int|null|string $key, \Closure $default = null)
     * @method User|null first(callable|null $callback = null, \Closure $default = null)
     * @method User|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method User|null find($key, $default = null)
     * @method User[] all()
     */
    class _IH_User_C extends _BaseCollection {
        /**
         * @param int $size
         * @param bool $preserveKeys
         * @return User[][]|Collection<_IH_User_C>
         */
        public function chunk($size, $preserveKeys = true)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_User_QB whereId($value)
     * @method _IH_User_QB whereName($value)
     * @method _IH_User_QB whereEmail($value)
     * @method _IH_User_QB whereEmailVerifiedAt($value)
     * @method _IH_User_QB wherePassword($value)
     * @method _IH_User_QB whereRememberToken($value)
     * @method _IH_User_QB whereCurrentTeamId($value)
     * @method _IH_User_QB whereProfilePhotoPath($value)
     * @method _IH_User_QB whereCreatedAt($value)
     * @method _IH_User_QB whereUpdatedAt($value)
     * @method _IH_User_QB whereTwoFactorSecret($value)
     * @method _IH_User_QB whereTwoFactorRecoveryCodes($value)
     * @method _IH_User_QB whereTwoFactorConfirmedAt($value)
     * @method User create(array $attributes = [])
     * @method User createOrFirst(array $attributes = [], array $values = [])
     * @method User createOrRestore($attributes = [], $values = [])
     * @method User createQuietly(array $attributes = [])
     * @method _IH_User_C|User[] cursor()
     * @method User[] eagerLoadRelations(array $models)
     * @method User|null|_IH_User_C|User[] find($id, array|string $columns = ['*'])
     * @method _IH_User_C|User[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOr($id, \Closure|string|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method User|_IH_User_C|User[] findOrFail($id, array|string $columns = ['*'])
     * @method User|_IH_User_C|User[] findOrNew($id, array|string $columns = ['*'])
     * @method User findSole($id, array|string $columns = ['*'])
     * @method User|null first(array|string $columns = ['*'])
     * @method User firstOr(\Closure|string[] $columns = ['*'], \Closure|null $callback = null)
     * @method User firstOrCreate(array $attributes = [], array $values = [])
     * @method User firstOrFail(array|string $columns = ['*'])
     * @method User firstOrNew(array $attributes = [], array $values = [])
     * @method User|null firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method User forceCreate(array $attributes)
     * @method User forceCreateQuietly(array $attributes = [])
     * @method _IH_User_C|User[] fromQuery(string $query, array $bindings = [])
     * @method _IH_User_C|User[] get(array|string $columns = ['*'])
     * @method User getModel()
     * @method User[] getModels(array|string $columns = ['*'])
     * @method _IH_User_C|User[] hydrate(array $items)
     * @method User incrementOrCreate(array $attributes, string $column = 'count', float|int $default = 1, float|int $step = 1, array $extra = [])
     * @method _IH_User_C|User[] lazy(int $chunkSize = 1000)
     * @method _IH_User_C|User[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_User_C|User[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method User make(array $attributes = [])
     * @method User newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|User[]|_IH_User_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null, \Closure|int|null $total = null)
     * @method User restoreOrCreate($attributes = [], $values = [])
     * @method Paginator|User[]|_IH_User_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method User sole(array|string $columns = ['*'])
     * @method User updateOrCreate(array $attributes, array $values = [])
     * @method _IH_User_QB permission(array|BackedEnum|Collection|int|Permission|string $permissions, bool $without = false)
     * @method _IH_User_QB role(array|BackedEnum|Collection|int|Role|string $roles, string $guard = null, bool $without = false)
     * @method _IH_User_QB withoutPermission(array|BackedEnum|Collection|int|Permission|string $permissions)
     * @method _IH_User_QB withoutRole(array|BackedEnum|Collection|int|Role|string $roles, string $guard = null)
     */
    class _IH_User_QB extends _BaseBuilder {}
}