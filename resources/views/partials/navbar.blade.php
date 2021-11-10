@php
    $repos = App\Models\Repository::all()->pluck('name')->unique();
    $partitions = App\Models\Repository::all()->pluck('partition')->unique();
    $newRelic = [
        'Global' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qYzVOUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qYzVOUSJ9&state=4bf9c002-f7b8-efde-3bda-88629e7a484b',
        'Global EAST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNE5qUXpPUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNE5qUXpPUSJ9&state=38138f1d-d26f-b540-4e10-6815cb93f88f',
        'Global WEST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNE5qUXpPUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNE5qUXpPUSJ9&state=38138f1d-d26f-b540-4e10-6815cb93f88f',
        'Cenam' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qazRNdyIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qazRNdyJ9&state=1d8832ba-2a87-4925-22b0-028bfc82dd9c',
        'Cenam EAST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qa3pPUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU1qa3pPUSJ9&state=53c7d65a-b7d0-a752-66a2-49efdb3b82b8',
        'Cenam WEST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QXdOZyIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QXdOZyJ9&state=9ccc3073-c782-60c0-b740-4c818b5073a8',
        'Bnet' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QTBNUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QTBNUSJ9&state=ba6fe834-5110-0b81-36bb-89b0e96ec500',
        'Bnet EAST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsInNlbGVjdGVkUGFnZSI6Ik5qYzFORFV5ZkZaSldueEVRVk5JUWs5QlVrUjhNVE01TXpBek1nIiwiZW50aXR5R3VpZCI6Ik5qYzFORFV5ZkZaSldueEVRVk5JUWs5QlVrUjhNVE01TXpBek1nIn0=&state=e9086f41-6fd9-beb4-4f94-aa7f9ff7ad4f',
        'Bnet WEST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QTFNQSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16QTFNQSJ9&state=2080567c-848a-34ba-7b62-0c57f6d19648',
        'Andina' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16YzFNUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16YzFNUSJ9&state=f3d4bc09-0409-8d84-5cb6-36827e677810',
        'Andina EAST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16YzBOUSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16YzBOUSJ9&state=03aa2d6e-ea89-f1ad-0671-5e0bcee287d8',
        'Andina WEST' => 'https://one.newrelic.com/launcher/dashboards.launcher?platform[$isFallbackTimeRange]=false&pane=eyJuZXJkbGV0SWQiOiJkYXNoYm9hcmRzLmRldGFpbCIsInVzZURlZmF1bHRUaW1lUmFuZ2UiOmZhbHNlLCJzZWxlY3RlZFBhZ2UiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16a3hPQSIsImlzVGVtcGxhdGVFbXB0eSI6ZmFsc2UsImVudGl0eUd1aWQiOiJOamMxTkRVeWZGWkpXbnhFUVZOSVFrOUJVa1I4TVRNNU16a3hPQSJ9&state=f4eb5efb-5f92-0c5a-792c-a32d411fb59a',
    ];
@endphp
<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a class="navbar-brand" href="/">Monitor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/jira" class="btn btn-dark">Jira</a>
            </li>
            <li class="nav-item">

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">
                    New Relic
                </a>
                <ul class="dropdown-menu">
                    @foreach($newRelic as $name => $url)
                        <li>
                            <a target="_blank" href="{{$url}}" class="dropdown-item">{{$name}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item">
                <a target="_blank" href="http://10.9.1.110:9000/dashboard?id=CMS_GO_PROVIDERS" class="btn btn-dark">SonarQube</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown">
                    Jenkins
                </a>
                <ul class="dropdown-menu">
                    @foreach($repos as $repo)
                        <li>
                            <a class="dropdown-item" href="#">
                                {{$repo}}
                                &raquo
                            </a>
                            <ul class="submenu dropdown-menu">
                                @foreach($partitions as $partition)
                                    <li>
                                        <a class="dropdown-item" href="/{{$repo}}/{{$partition}}">{{$partition}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                @endforeach
                </ul>
            </li>
    </div>
    <div>
        <li class="navbar nav-item">
            @if (Route::has('login'))
            <div class="hidden sm:block">
                @auth
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-gray-200 hover:text-gray-700 focus:outline-none transition">
                                            {{ Auth::user() ? Auth::user()->name : 'Guest' }}

                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Account') }}
                                </div>

                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-jet-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-jet-dropdown-link>
                                @endif

                                <div class="border-t border-gray-100"></div>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-jet-dropdown-link>
                                </form>
                            </x-slot>
                        </x-jet-dropdown>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
            @endif
        </li>
    </div>
</nav>
