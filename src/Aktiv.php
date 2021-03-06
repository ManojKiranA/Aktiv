<?php
namespace Manojkiran\Aktiv;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class Aktiv
{
    /**
     * @function     isRouteActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $routeName
     * @param        string  $className
     * @return       string
     * @usage        Detect The Give route and return as Active
     * @version      1.4
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Active Route
    |--------------------------------------------------------------------------
    |
    | Compare given route with current route and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage:
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::isRouteActive('routeName') }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::isRouteActive('routeName','activeClassName') }}">
    |
    */
    public  function isRouteActive(string $routeName, string $className = null)
    {

        $className = $this->setClassNameToActiveIfNull($className);
        
        if (Route::currentRouteName() == $routeName) {
                return $className;
            }
    }
    /**
     * @function     areRoutesActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        array  $routeNames
     * @param        string  $className
     * @return       string
     * @usage        Detect The Give routes and return as Active
     * @version      1.3
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Active Routes
    |--------------------------------------------------------------------------
    |
    | Compare given array of  routes with current route and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::areRoutesActive(['routeName1','routeName2','routeName3',routeNameN]) }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::areRoutesActive(['routeName1','routeName2','routeName3',routeNameN],'activeClassName') }}">
    |
    */
    public function areRoutesActive(array $routeNames, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        foreach ($routeNames as $routeName) {
                if (Route::currentRouteName() == $routeName) {
                        return $className;
                    }
            }
    }
    /**
     * @function     isResourceActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $resourceName
     * @param        string  $className
     * @return       string
     * @usage        Detect The Give resources and return as Active
     * @version      1.5
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Active Resource
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resource with current resource and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage:
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::isResourceActive('resourceName') }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::isResourceActive('resourceName','activeClassName') }}">
    |
    */
    public  function isResourceActive(string $resourceName, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        $routeResourceLists = $this->getResourceRoutes();
        foreach ($routeResourceLists as $routeResourceList) {
                $activateEachRoute = $resourceName . $routeResourceList;
                if (Route::is($activateEachRoute)) {
                        return $className;
                    }
            }
    }
    /**
     * @function     areResourcesActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        array  $resourceNames
     * @param        string  $className
     * @return       string
     * @usage        Detect The Give resources and return as Active
     * @version      1.5
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Active Resources
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resources with current resources and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::areResourcesActive(['resourceName1','resourceName2','resourceName3',resourceNameN]) }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::areResourcesActive(['resourceName1','resourceName2','resourceName3',resourceNameN],'activeClassName') }}">
    |
    */
    public function areResourcesActive(array $resourceNames, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        $routeResourceLists = $this->getResourceRoutes();
        foreach ($resourceNames as $resourceName) {


                foreach ($routeResourceLists as $routeResourceList) {
                        $activateEachRoute = $resourceName . $routeResourceList;

                        if (Route::is($activateEachRoute)) {
                                return $className;
                            }
                    }
            }
    }
    /**
     * @function     isActivePattern
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $hyperLink
     * @param        string  $className
     * @return       string
     * @usage        Detects if the given string is found in the current URL and return as Active
     * @version      1.5
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Current Url Pattern
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resources with current resources and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::isActivePattern('test') }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::isActivePattern('test','activeClassName') }}">
    |
    */
    public function isActivePattern(string $hyperLink, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        if (strpos(URL::current(), $hyperLink) !== false) {
                return $className;
            }
    }
    /**
     * @function     areActivePatterns
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $hyperLink
     * @param        string  $className
     * @return       string
     * @usage        Detects if the given string is found in the current URL and return as Active
     * @version      1.5
     **/
    /*
    |--------------------------------------------------------------------------
    | Detect Current Url Pattern
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resources with current resources and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::areActivePatterns('test') }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::areActivePatterns('test','activeClassName') }}">
    |
    */
    public function areActivePatterns(string $hyperLinks, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        foreach ($hyperLinks as $hyperLink) {
                if (strpos(URL::current(), $hyperLink) !== false) {
                        return $className;
                    }
            }
    }
    /**
     * @function     isUrlActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $hyperLink
     * @param        string  $className
     * @return       string
     * @usage        Compares given URL with current URL and return as Active
     * @version      1.1
     **/
    /*
    |--------------------------------------------------------------------------
    | Compares given URL with current URL
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resources with current resources and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::isUrlActive('test') }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::isUrlActive('test','activeClassName') }}">
    |
    */
    public function isUrlActive(string $hyperLink, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        if (URL::current() == URL::to($hyperLink)) {
                return $className;
            }
    }
    /**
     * @function     areUrlsActive
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param        string  $hyperLink
     * @param        string  $className
     * @return       string
     * @usage        Compares given array of URLs with current URL and return as Active
     * @version      1.1
     **/
    /*
    |--------------------------------------------------------------------------
    | Compares given array of URLs with current URL
    |--------------------------------------------------------------------------
    |
    | Compare given array of  resources with current resources and return className if they matches.
    | Very useful for navigation, marking if the link is active.
    |
    |Usage
    |Option 1: Returning the bootstrap active class
    |<li class="{{ Aktiv::areUrlsActive(['urlOne','urlTwo','urlThree']) }}">
    |
    |Option 2: Returning the Custom active class
    |<li class="{{ Aktiv::areUrlsActive(['urlOne','urlTwo','urlThree'],'activeClassName') }}">
    |
    */
    public function areUrlsActive(array $hyperLinks, string $className = null)
    {
        $className = $this->setClassNameToActiveIfNull($className);
        foreach ($hyperLinks as $hyperLink) {
                if (URL::current() == URL::to($hyperLink)) {
                        return $className;
                    }
            }
    }
    /**
     * Determines the ClassName for the Aktiv Class Methods.
     *
     * @function     setClassNameToActiveIfNull
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @param  string $className
     * @return string
     */
    public function setClassNameToActiveIfNull(string $className = null)
    {
        if ($className == null) {
                $className = "active";
            }
        return $className;
    }
    /**
     * Determines the List of Available route methods.
     *
     * @function     getResourceRoutes
     * @author       Manojkiran <manojkiran10031998@gmail.com>
     * @return array
     */
    public function getResourceRoutes()
    {
        $routeResourceLists = ['.index', '.create', '.edit', '.show'];
        return $routeResourceLists;
    }
}
