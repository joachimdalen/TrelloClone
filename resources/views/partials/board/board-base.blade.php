@extends('app')
@section('content')

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

                    <div class="new-card">
                        <a>Add new card...</a>
                    </div>


                </div>
            </div>
        </div>

        <div class="list">
            <div class="list-container">
                <div class="list-header">This is my list</div>
                <div class="list-item-container">
                    <div class="list-item">
                        <div class="item-card">
                            <div class="card-id-container">#1000</div>
                            <div class="card-label-container"></div>
                            <div class="card-content">Fix divs in container to lign up with each other.</div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="new-card">
                        <a id="newModalTrigger">Add new card...</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="list-container">
                <div class="list-header">This is my list</div>
                <div class="list-item-container">
                    <div class="new-card">
                        <a id="newModalTrigger">Add new card...</a>
                    </div>
                </div>
            </div>
        </div>
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
    <!-- MODAL START-->
    <div id="newCardModal" class="modal">
        <!-- Modal content -->

        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                <input type="text" placeholder="Title here">
                <span class="sub-title">in This is my new list</span>
            </div>
            <div class="modal-toolbar">
                <button>Test</button>
                <button>Test</button>
            </div>
            <div class="modal-body">
                <p>Some text in the Modal Body</p>
                <p>Some other text...</p>
            </div>
            <div class="modal-footer">
                <button type="submit">Add</button>
            </div>
        </div>
    </div>
    <!-- MODAL END -->
@stop