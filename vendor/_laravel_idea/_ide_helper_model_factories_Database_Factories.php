<?php //e9795f5f4b3824bc1b113ba46f2eaf68
/** @noinspection all */

namespace Database\Factories {

    use Illuminate\Database\Eloquent\Factories\Factory;
    
    /**
     * @method $this forOwner($attributes = [])
     * @method $this hasTeamInvitations($count = 1, $attributes = [])
     * @method $this hasUsers($count = 1, $attributes = [])
     */
    class TeamFactory extends Factory {}
    
    /**
     * @method $this hasNotifications($count = 1, $attributes = [])
     * @method $this hasPermissions($count = 1, $attributes = [])
     * @method $this hasReadNotifications($count = 1, $attributes = [])
     * @method $this hasRoles($count = 1, $attributes = [])
     * @method $this hasTokens($count = 1, $attributes = [])
     * @method $this hasUnreadNotifications($count = 1, $attributes = [])
     */
    class UserFactory extends Factory {}
}