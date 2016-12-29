@extends('app')
@section('content')
    <div class="mdl-layout mdl-js-layout">
        <header class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Task List</span>
                <!-- Add spacer, to align navigation to the right -->
            {{-- <div class="mdl-layout-spacer"></div>--}}
            <!-- Navigation -->
                {{--<nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                    <a class="mdl-navigation__link" href="">Link</a>
                </nav>--}}
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Boards</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
                <a class="mdl-navigation__link" href="">Link</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                @yield('board-content')
                <div class="board-header color-fill">
                    <span>My board</span>
                    <a id="show-menu">Show menu</a>
                </div>
                <div class="board-container color-fill">
                    <div class="list">
                        <div class="list-container">
                            <div class="list-header">This is my list</div>
                            <div class="list-item-container">
                                <div class="list-item">
                                    <div class="item-card">
                                        <div class="card-id-container">#1000</div>
                                        <div class="card-label-container">
                                            <div class="card-label color-fill">Frontend</div>
                                            <div class="card-label color-fill-pink">Done</div>
                                        </div>
                                        <div class="card-content">
                                            <img src="http://placehold.it/350x150">
                                            Fix divs in container to lign up with each other.
                                        </div>
                                        <div class="card-footer">
                                            <!--
                                            card-modules: Icons for checklists, files etc
                                            card-members: avatar icons for members of card
                                            -->
                                            <div class="card-modules"></div>
                                            {{-- <div class="card-members">
                                                 <img src="http://placehold.it/35x35">
                                                 <img src="http://placehold.it/35x35">
                                                 <img src="http://placehold.it/35x35">
                                             </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="item-card">
                                        <div class="card-id-container">#1000</div>
                                        <div class="card-label-container">
                                            <div class="card-label color-fill">Frontend</div>
                                            <div class="card-label color-fill-pink">Done</div>
                                        </div>
                                        <div class="card-content">
                                            <img src="http://placehold.it/150x350">
                                            Fix divs in container to lign up with each other.
                                        </div>
                                        <div class="card-footer">

                                        </div>

                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="new-card">
                                        <a>Add new card...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- TEST START -->
                    <div class="list">
                        <div class="list-container">
                            <div class="list-header">This is my list</div>
                            <div class="list-item-container">
                                <div class="list-item">
                                    <div class="item-card">
                                        <div class="card-id-container">#1000</div>
                                        <div class="card-label-container"></div>
                                        <div class="card-content">
                                            Fix divs in container to lign up with each other.
                                        </div>
                                        <div class="card-footer"></div>
                                    </div>
                                </div>
                                <div class="list-item">
                                    <div class="new-card">
                                        <a>Add new card...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-container">
                            <div class="list-header">This is my list</div>
                            <div class="list-item-container">
                                <div class="list-item" id="newCard">
                                    <div class="new-card">
                                        <a>Add new card...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-container">
                            <div class="list-header">This is my list</div>
                            <div class="list-item-container">
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item" id="newCard">
                                    <div class="new-card">
                                        <a>Add new card...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <div class="list-container">
                            <div class="list-header">This is my list</div>
                            <div class="list-item-container">
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item">
                                    Hello
                                </div>
                                <div class="list-item" id="newCard">
                                    <div class="new-card">
                                        <a>Add new card...</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- TEST END -->
                    <div class="list new-list" id="newList">
                        <a>Add new list...</a>
                    </div>
                </div>
                <div class="menu-container" id="side-menu">
                    <div class="menu-header">
                        <h3>Menu</h3>
                        <hr>
                    </div>
                </div>
            </div>
        </main>
    </div>
@stop