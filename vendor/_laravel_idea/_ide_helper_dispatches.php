<?php //f92ae9931b443817ce581516bf8e6aa5
/** @noinspection all */

namespace Illuminate\Broadcasting {
    
    /**
     * @method static void dispatch(array|Channel|string $channels)
     * @method static PendingBroadcast broadcast(array|Channel|string $channels)
     */
    class AnonymousEvent {}
}

namespace Illuminate\Bus {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Illuminate\Support\Fluent;
    
    /**
     * @method static PendingDispatch dispatch(PendingBatch $batch)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, PendingBatch $batch)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, PendingBatch $batch)
     * @method static mixed dispatchSync(PendingBatch $batch)
     * @method static void dispatchAfterResponse(PendingBatch $batch)
     */
    class ChainedBatch {}
}

namespace Illuminate\Foundation\Console {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Illuminate\Support\Fluent;
    
    /**
     * @method static PendingDispatch dispatch(array $data)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, array $data)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, array $data)
     * @method static mixed dispatchSync(array $data)
     * @method static void dispatchAfterResponse(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Foundation\Events {

    use Illuminate\Broadcasting\PendingBroadcast;
    
    /**
     * @method static void dispatch(array $stubs)
     * @method static PendingBroadcast broadcast(array $stubs)
     */
    class PublishingStubs {}
}

namespace Illuminate\Queue {

    use Illuminate\Foundation\Bus\PendingDispatch;
    use Illuminate\Support\Fluent;
    use Laravel\SerializableClosure\SerializableClosure;
    
    /**
     * @method static PendingDispatch dispatch(SerializableClosure $closure)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, SerializableClosure $closure)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, SerializableClosure $closure)
     * @method static mixed dispatchSync(SerializableClosure $closure)
     * @method static void dispatchAfterResponse(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Laravel\Fortify\Events {

    use App\Models\User;
    use Illuminate\Broadcasting\PendingBroadcast;
    use Illuminate\Contracts\Auth\Authenticatable;
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class PasswordUpdatedViaController {}
    
    /**
     * @method static void dispatch(Authenticatable $user, string $code)
     * @method static PendingBroadcast broadcast(Authenticatable $user, string $code)
     */
    class RecoveryCodeReplaced {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class RecoveryCodesGenerated {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationChallenged {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationConfirmed {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationDisabled {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationEnabled {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class TwoFactorAuthenticationFailed {}
    
    /**
     * @method static void dispatch(User $user)
     * @method static PendingBroadcast broadcast(User $user)
     */
    class ValidTwoFactorAuthenticationCodeProvided {}
}

namespace Laravel\Jetstream\Events {

    use App\Models\Team;
    use Illuminate\Broadcasting\PendingBroadcast;
    
    /**
     * @method static void dispatch($owner)
     * @method static PendingBroadcast broadcast($owner)
     */
    class AddingTeam {}
    
    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class AddingTeamMember {}
    
    /**
     * @method static void dispatch($team, $email, $role)
     * @method static PendingBroadcast broadcast($team, $email, $role)
     */
    class InvitingTeamMember {}
    
    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class RemovingTeamMember {}
    
    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamCreated {}
    
    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamDeleted {}
    
    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberAdded {}
    
    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberRemoved {}
    
    /**
     * @method static void dispatch($team, $user)
     * @method static PendingBroadcast broadcast($team, $user)
     */
    class TeamMemberUpdated {}
    
    /**
     * @method static void dispatch(Team $team)
     * @method static PendingBroadcast broadcast(Team $team)
     */
    class TeamUpdated {}
}

namespace Spatie\Permission\Events {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Foundation\Bus\PendingDispatch;
    use Illuminate\Support\Collection;
    use Illuminate\Support\Fluent;
    use Spatie\Permission\Contracts\Permission;
    use Spatie\Permission\Contracts\Role;
    
    /**
     * @method static PendingDispatch dispatch(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static mixed dispatchSync(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static void dispatchAfterResponse(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     */
    class PermissionAttached {}
    
    /**
     * @method static PendingDispatch dispatch(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static mixed dispatchSync(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     * @method static void dispatchAfterResponse(Model $model, array|Collection|int[]|Permission|Permission[]|string[] $permissionsOrIds)
     */
    class PermissionDetached {}
    
    /**
     * @method static PendingDispatch dispatch(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static mixed dispatchSync(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static void dispatchAfterResponse(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     */
    class RoleAttached {}
    
    /**
     * @method static PendingDispatch dispatch(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static PendingDispatch|Fluent dispatchIf(boolean $bool, Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static PendingDispatch|Fluent dispatchUnless(boolean $bool, Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static mixed dispatchSync(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     * @method static void dispatchAfterResponse(Model $model, array|Collection|int[]|Role|Role[]|string[] $rolesOrIds)
     */
    class RoleDetached {}
}
