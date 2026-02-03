<?php //5cd64a1d05101fc91fe4d6dd9d41f65e
/** @noinspection all */

namespace App\Models {

    use Database\Factories\TeamFactory;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use Illuminate\Support\Carbon;
    use Laravel\Sanctum\PersonalAccessToken;
    use LaravelIdea\Helper\App\Models\_IH_Invoice_C;
    use LaravelIdea\Helper\App\Models\_IH_Invoice_QB;
    use LaravelIdea\Helper\App\Models\_IH_MedicalRecord_C;
    use LaravelIdea\Helper\App\Models\_IH_MedicalRecord_QB;
    use LaravelIdea\Helper\App\Models\_IH_Membership_C;
    use LaravelIdea\Helper\App\Models\_IH_Membership_QB;
    use LaravelIdea\Helper\App\Models\_IH_Payment_C;
    use LaravelIdea\Helper\App\Models\_IH_Payment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Pet_C;
    use LaravelIdea\Helper\App\Models\_IH_Pet_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReservationService_C;
    use LaravelIdea\Helper\App\Models\_IH_ReservationService_QB;
    use LaravelIdea\Helper\App\Models\_IH_Reservation_C;
    use LaravelIdea\Helper\App\Models\_IH_Reservation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Service_C;
    use LaravelIdea\Helper\App\Models\_IH_Service_QB;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_C;
    use LaravelIdea\Helper\App\Models\_IH_TeamInvitation_QB;
    use LaravelIdea\Helper\App\Models\_IH_Team_C;
    use LaravelIdea\Helper\App\Models\_IH_Team_QB;
    use LaravelIdea\Helper\App\Models\_IH_User_C;
    use LaravelIdea\Helper\App\Models\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_C;
    use LaravelIdea\Helper\Laravel\Sanctum\_IH_PersonalAccessToken_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_C;
    use LaravelIdea\Helper\Spatie\Permission\Models\_IH_Role_QB;
    use Spatie\Permission\Models\Permission;
    use Spatie\Permission\Models\Role;
    
    /**
     * @property int $id
     * @property int $reservation_id
     * @property string $invoice_number
     * @property float $total
     * @property string $status
     * @property Carbon|null $issued_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_Payment_C|Payment[] $payments
     * @property-read int $payments_count
     * @method HasMany|_IH_Payment_QB payments()
     * @property Reservation $reservation
     * @method BelongsTo|_IH_Reservation_QB reservation()
     * @method static _IH_Invoice_QB onWriteConnection()
     * @method _IH_Invoice_QB newQuery()
     * @method static _IH_Invoice_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Invoice_QB query()
     * @method static _IH_Invoice_QB with(array|string $relations)
     * @method _IH_Invoice_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Invoice_C|Invoice[] all($columns = ['*'])
     * @ownLinks reservation_id,\App\Models\Reservation,id
     * @foreignLinks id,\App\Models\Payment,invoice_id
     * @mixin _IH_Invoice_QB
     */
    class Invoice extends Model {}
    
    /**
     * @property int $id
     * @property int $pet_id
     * @property int $veterinarian_id
     * @property string $diagnosis
     * @property string|null $treatment
     * @property string|null $notes
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property Pet $pet
     * @method BelongsTo|_IH_Pet_QB pet()
     * @property User $veterinarian
     * @method BelongsTo|_IH_User_QB veterinarian()
     * @method static _IH_MedicalRecord_QB onWriteConnection()
     * @method _IH_MedicalRecord_QB newQuery()
     * @method static _IH_MedicalRecord_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_MedicalRecord_QB query()
     * @method static _IH_MedicalRecord_QB with(array|string $relations)
     * @method _IH_MedicalRecord_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MedicalRecord_C|MedicalRecord[] all($columns = ['*'])
     * @ownLinks pet_id,\App\Models\Pet,id|veterinarian_id,\App\Models\User,id
     * @mixin _IH_MedicalRecord_QB
     */
    class MedicalRecord extends Model {}
    
    /**
     * @property int $id
     * @property int $team_id
     * @property int $user_id
     * @property string|null $role
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_Membership_QB onWriteConnection()
     * @method _IH_Membership_QB newQuery()
     * @method static _IH_Membership_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Membership_QB query()
     * @method static _IH_Membership_QB with(array|string $relations)
     * @method _IH_Membership_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Membership_C|Membership[] all($columns = ['*'])
     * @ownLinks team_id,\App\Models\Team,id|user_id,\App\Models\User,id
     * @mixin _IH_Membership_QB
     */
    class Membership extends Model {}
    
    /**
     * @property int $id
     * @property int $invoice_id
     * @property int $user_id
     * @property float $amount
     * @property string $payment_method
     * @property string $status
     * @property string|null $transaction_id
     * @property Carbon|null $paid_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Invoice $invoice
     * @method BelongsTo|_IH_Invoice_QB invoice()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Payment_QB onWriteConnection()
     * @method _IH_Payment_QB newQuery()
     * @method static _IH_Payment_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Payment_QB query()
     * @method static _IH_Payment_QB with(array|string $relations)
     * @method _IH_Payment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Payment_C|Payment[] all($columns = ['*'])
     * @ownLinks invoice_id,\App\Models\Invoice,id|user_id,\App\Models\User,id
     * @mixin _IH_Payment_QB
     */
    class Payment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property string $species
     * @property string|null $breed
     * @property int $age
     * @property float $weight
     * @property string|null $notes
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property _IH_MedicalRecord_C|MedicalRecord[] $medicalRecords
     * @property-read int $medical_records_count
     * @method HasMany|_IH_MedicalRecord_QB medicalRecords()
     * @property User $owner
     * @method BelongsTo|_IH_User_QB owner()
     * @method static _IH_Pet_QB onWriteConnection()
     * @method _IH_Pet_QB newQuery()
     * @method static _IH_Pet_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Pet_QB query()
     * @method static _IH_Pet_QB with(array|string $relations)
     * @method _IH_Pet_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Pet_C|Pet[] all($columns = ['*'])
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\Reservation,pet_id|id,\App\Models\MedicalRecord,pet_id
     * @mixin _IH_Pet_QB
     */
    class Pet extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $pet_id
     * @property Carbon $start_date
     * @property Carbon $end_date
     * @property string $status
     * @property float $total_price
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Carbon|null $deleted_at
     * @property Invoice $invoice
     * @method HasOne|_IH_Invoice_QB invoice()
     * @property Pet $pet
     * @method BelongsTo|_IH_Pet_QB pet()
     * @property _IH_Service_C|Service[] $services
     * @property-read int $services_count
     * @method BelongsToMany|_IH_Service_QB services()
     * @property User $user
     * @method BelongsTo|_IH_User_QB user()
     * @method static _IH_Reservation_QB onWriteConnection()
     * @method _IH_Reservation_QB newQuery()
     * @method static _IH_Reservation_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Reservation_QB query()
     * @method static _IH_Reservation_QB with(array|string $relations)
     * @method _IH_Reservation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Reservation_C|Reservation[] all($columns = ['*'])
     * @ownLinks user_id,\App\Models\User,id|pet_id,\App\Models\Pet,id
     * @foreignLinks id,\App\Models\ReservationService,reservation_id|id,\App\Models\Invoice,reservation_id
     * @mixin _IH_Reservation_QB
     */
    class Reservation extends Model {}
    
    /**
     * @property int $id
     * @property int $reservation_id
     * @property int $service_id
     * @property float $price
     * @property int $duration
     * @property string|null $notes
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_ReservationService_QB onWriteConnection()
     * @method _IH_ReservationService_QB newQuery()
     * @method static _IH_ReservationService_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_ReservationService_QB query()
     * @method static _IH_ReservationService_QB with(array|string $relations)
     * @method _IH_ReservationService_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReservationService_C|ReservationService[] all($columns = ['*'])
     * @ownLinks reservation_id,\App\Models\Reservation,id|service_id,\App\Models\Service,id
     * @mixin _IH_ReservationService_QB
     */
    class ReservationService extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string|null $description
     * @property float $base_price
     * @property bool $is_active
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property _IH_Reservation_C|Reservation[] $reservations
     * @property-read int $reservations_count
     * @method BelongsToMany|_IH_Reservation_QB reservations()
     * @method static _IH_Service_QB onWriteConnection()
     * @method _IH_Service_QB newQuery()
     * @method static _IH_Service_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Service_QB query()
     * @method static _IH_Service_QB with(array|string $relations)
     * @method _IH_Service_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Service_C|Service[] all($columns = ['*'])
     * @foreignLinks id,\App\Models\ReservationService,service_id
     * @mixin _IH_Service_QB
     */
    class Service extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property bool $personal_team
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property User $owner
     * @method BelongsTo|_IH_User_QB owner()
     * @property _IH_TeamInvitation_C|TeamInvitation[] $teamInvitations
     * @property-read int $team_invitations_count
     * @method HasMany|_IH_TeamInvitation_QB teamInvitations()
     * @property _IH_User_C|User[] $users
     * @property-read int $users_count
     * @method BelongsToMany|_IH_User_QB users()
     * @method static _IH_Team_QB onWriteConnection()
     * @method _IH_Team_QB newQuery()
     * @method static _IH_Team_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_Team_QB query()
     * @method static _IH_Team_QB with(array|string $relations)
     * @method _IH_Team_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Team_C|Team[] all($columns = ['*'])
     * @ownLinks user_id,\App\Models\User,id
     * @foreignLinks id,\App\Models\TeamInvitation,team_id|id,\App\Models\Membership,team_id
     * @mixin _IH_Team_QB
     * @method static TeamFactory factory(callable|int|mixed[]|null $count = null, callable|mixed[] $state = [])
     */
    class Team extends Model {}
    
    /**
     * @property int $id
     * @property int $team_id
     * @property string $email
     * @property string|null $role
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Team $team
     * @method BelongsTo|_IH_Team_QB team()
     * @method static _IH_TeamInvitation_QB onWriteConnection()
     * @method _IH_TeamInvitation_QB newQuery()
     * @method static _IH_TeamInvitation_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_TeamInvitation_QB query()
     * @method static _IH_TeamInvitation_QB with(array|string $relations)
     * @method _IH_TeamInvitation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TeamInvitation_C|TeamInvitation[] all($columns = ['*'])
     * @ownLinks team_id,\App\Models\Team,id
     * @mixin _IH_TeamInvitation_QB
     */
    class TeamInvitation extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property Carbon|null $email_verified_at
     * @property mixed $password
     * @property string|null $remember_token
     * @property int|null $current_team_id
     * @property string|null $profile_photo_path
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $two_factor_secret
     * @property string|null $two_factor_recovery_codes
     * @property Carbon|null $two_factor_confirmed_at
     * @property-read string $profile_photo_url attribute
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_Permission_C|Permission[] $permissions
     * @property-read int $permissions_count
     * @method MorphToMany|_IH_Permission_QB permissions()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method MorphToMany|_IH_Role_QB roles()
     * @property _IH_PersonalAccessToken_C|PersonalAccessToken[] $tokens
     * @property-read int $tokens_count
     * @method MorphToMany|_IH_PersonalAccessToken_QB tokens()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string|\UnitEnum $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all($columns = ['*'])
     * @foreignLinks id,\App\Models\Pet,user_id|id,\App\Models\Reservation,user_id|id,\App\Models\MedicalRecord,veterinarian_id|id,\App\Models\Payment,user_id
     * @mixin _IH_User_QB
     * @method static UserFactory factory(callable|int|mixed[]|null $count = null, callable|mixed[] $state = [])
     */
    class User extends Model {}
}