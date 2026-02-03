<?php //fefc847d4823d025567eb69c4a10534d
/** @noinspection all */

namespace Illuminate\Contracts\View {
    
    /**
     * @method $this extends($view, $params = [])
     * @method $this layout($view, $params = [])
     * @method $this layoutData($data = [])
     * @method $this response(callable $callback)
     * @method $this section($section)
     * @method $this slot($slot)
     * @method $this title($title)
     */
    class View {}
}

namespace Illuminate\Database\Eloquent {

    use Illuminate\Support\HigherOrderTapProxy;
    
    /**
     * @method Model|HigherOrderTapProxy createOrRestore(array $attributes = [], array $values = [])
     * @method $this onlyTrashed()
     * @method int restore()
     * @method Model|HigherOrderTapProxy restoreOrCreate(array $attributes = [], array $values = [])
     * @method $this withTrashed($withTrashed = true)
     * @method $this withoutTrashed()
     */
    class Builder {}
}

namespace Illuminate\Http {
    
    /**
     * @method $this banner($message)
     * @method $this dangerBanner($message)
     * @method $this warningBanner($message)
     */
    class RedirectResponse {}
}

namespace Illuminate\Redis {
    
    /**
     * @mixin \Illuminate\Redis\Connections\PhpRedisConnection
     * @mixin \Redis
     */
    class RedisManager {}
}

namespace Illuminate\Routing {
    
    /**
     * @method $this lazy($enabled = true)
     * @method $this|array permission($permissions = [])
     * @method $this|array role($roles = [])
     * @method $this|array roleOrPermission($rolesOrPermissions = [])
     */
    class Route {}
}

namespace Illuminate\Testing {
    
    /**
     * @method $this assertDontSeeLivewire($component)
     * @method $this assertSeeLivewire($component)
     */
    class TestResponse {}
    
    /**
     * @method $this assertDontSeeLivewire($component)
     * @method $this assertSeeLivewire($component)
     */
    class TestView {}
}

namespace Illuminate\View {

    use Livewire\WireDirective;
    
    /**
     * @method WireDirective wire($name)
     */
    class ComponentAttributeBag {}
    
    /**
     * @method $this extends($view, $params = [])
     * @method $this layout($view, $params = [])
     * @method $this layoutData($data = [])
     * @method $this response(callable $callback)
     * @method $this section($section)
     * @method $this slot($slot)
     * @method $this title($title)
     */
    class View {}
}

namespace Laravel\Dusk {
    
    /**
     * @method $this assertAttributeMissing($selector, $attribute)
     * @method $this assertClassMissing($selector, $className)
     * @method $this assertConsoleLogHasErrors()
     * @method $this assertConsoleLogHasNoErrors()
     * @method $this|void assertConsoleLogHasWarning($expectedMessage)
     * @method $this|void assertConsoleLogMissingWarning($expectedMessage)
     * @method $this assertHasClass($selector, $className)
     * @method $this|void assertInViewPort($selector, $invert = false)
     * @method \Closure assertNotInViewPort($selector)
     * @method $this|void assertNotPresent($selector)
     * @method $this|void assertNotVisible($selector)
     * @method $this|void assertScript($js, $expects = true)
     * @method mixed offline()
     * @method mixed online()
     * @method $this runScript($js)
     * @method $this scrollTo($selector)
     * @method $this selectMultiple($field, $values = [])
     * @method object waitForLivewire($callback = null)
     * @method mixed waitForLivewireToLoad()
     * @method object waitForNavigate($callback = null)
     * @method object waitForNavigatePrefetchRequest($callback = null)
     * @method object waitForNavigateRequest($callback = null)
     * @method object waitForNoLivewire($callback = null)
     * @method object waitForNoNavigatePrefetchRequest($callback = null, $prefetchDelay = 70)
     * @method object waitForNoNavigateRequest($callback = null)
     */
    class Browser {}
}
