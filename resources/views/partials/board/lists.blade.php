<div class="fill-page-container board-container color-fill" {{--ng-controller="boardController"--}} ng-init="init()">

    {{--
     <div class="list">
            <div class="list-container">
                <div class="list-header">
                    <a id="list-header-label">This is my list</a>
                    <input type="text" class="list-header" placeholder="List title" id="list-header-field"
                           style="display: none;">
                </div>

                <div class="list-item-container">
                    <div class="list-item">
                        <div class="item-card" id="editCardTrigger">
                            <div class="card-id-container">#1000</div>

                            <div class="card-label-container">
                                <span class="label label-red">Default</span>
                                <span class="label label-primary">Primary</span>
                                <span class="label  label-green">Success</span>
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
                                <div class="card-members">
                                    <img src="http://placehold.it/35x35">
                                    <img src="http://placehold.it/35x35">
                                    <img src="http://placehold.it/35x35">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="item-card border-orange" id="editCardTrigger">
                            <div class="card-id-container">#1000</div>
                            <div class="card-label-container">
                                <span class="label label-red">Default</span>
                                <span class="label label-primary">Primary</span>
                                <span class="label label-green">Success</span>
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
                        <a id="newModalTrigger">Add new card...</a>
                    </div>


                </div>
            </div>
        </div>
                --}}
    {{--    <div class="list">
            <div class="list-container">
                <div class="list-item-container">
                    <div class="list-item" id="editCardTrigger">
                        <div class="item-card">
                            <div class="card-id-container">#1000</div>
                            <div class="card-label-container"></div>
                            <div class="card-content">Fix divs in container to lign up with each other.</div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="list-item" ng-show="list.isCreatingCard">
                        <form style="display: flex" ng-submit="submitNewCard(list)">
                            <input type="text" placeholder="Card title" ng-model="cardTitle" required/>
                            <div class="new-list-controls">
                                <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus"></i>
                                </button>
                                <a class="btn btn-block btn-danger" ng-click="cancelAddCard(list)"><i class="fa fa-ban"></i></a>
                            </div>
                        </form>
                    </div>
                    <div class="new-card">
                        <a id="newCardTrigger">Add new card...</a>
                    </div>
                </div>
            </div>
        </div>--}}


    <div class="list" ng-repeat="list in lists" ng-show="contentLoaded">
        <div class="list-container">
            <div class="list-header">
                <div class="list-item" ng-show="list.isRenaming">
                    <form style="display: flex" ng-submit="submitRename(list)">
                        <input type="text" placeholder="Card name" ng-model="list.name" required/>
                        <div class="new-list-controls">
                            <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus"></i></button>
                            <a class="btn btn-block btn-danger" ng-click="cancelRename(list)"><i class="fa fa-ban"></i></a>
                        </div>
                    </form>
                </div>
                <div ng-show="!list.isRenaming">
                    <span ng-click="rename(list)">@{{ list.name }}</span>
                    <i class="fa fa-cog" ng-click="viewListMenu(list)"></i>
                </div>
                {{--  <ul class="t-list-menu" type="context" id="menu"  ng-show="list.showListMenu">
                      <li><a><i class="fa fa-edit"></i> Rename</a></li>
                      <li>New Card</li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                  </ul>--}}
                <div class="list-menu" ng-show="list.showListMenu">
                    <span>@{{ list.name }}</span>
                    <ul class="list-unstyled">
                        <li><a ng-click="rename(list)"><i class="fa fa-edit"></i> Rename</a></li>
                        <li><a ng-click="addCard(list)"><i class="fa fa-plus"></i> New Card</a></li>
                        <li><a><i class="fa fa-edit"></i> Rename</a></li>
                        <li><a><i class="fa fa-archive"></i> Archive</a></li>

                    </ul>
                </div>
            </div>
            <div class="list-item-container">
                <div class="list-item" ng-repeat="card in list.cards">
                    <div class="item-card" ng-click="showCard(card, list)">
                        <div class="card-id-container">#@{{ card.id }}</div>
                        <div class="card-label-container">
                            <span id="@{{ list.list_id }}-@{{ card.card_id }}-@{{ label.label_info.label_id }}"
                                  ng-repeat="label in card.labels" class="label"
                                  style="background-color: @{{ label.label_info.color }}">@{{ label.label_info.name }}</span>
                        </div>
                        <div class="card-content">@{{ card.name }}</div>
                        <div class="card-footer">
                            <div class="card-modules">
                                <i class="fa fa-paperclip" data-toggle="tooltip" title="Contains attachments"
                                   ng-show="card.attachments != 0"></i>
                                <i class="fa fa-comments-o" data-toggle="tooltip" title="Has a description"
                                   ng-show="card.description != null"></i>
                                <i class="fa fa-clock-o" data-toggle="tooltip" title="Has a due date"
                                   ng-show="card.due_at != null"></i>
                            </div>
                            <div class="card-members" ng-show="card.members != 0">
                                <img style="width: 25px; height: 25px;"
                                     ng-repeat="member in card.members"
                                     src="@{{member.user.avatar}}"
                                     data-toggle="tooltip" title="@{{member.user.name}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-item" ng-show="list.isCreatingCard">
                    <form style="display: flex" ng-submit="submitNewCard(list)">
                        <input type="text" placeholder="Card name" ng-model="list.cardTitle" required/>
                        <div class="new-list-controls">
                            <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus"></i></button>
                            <a class="btn btn-block btn-danger" ng-click="cancelAddCard(list)"><i class="fa fa-ban"></i></a>
                        </div>
                    </form>
                </div>
                <div class="new-card" ng-show="!list.isCreatingCard">
                    <a id="newCardTrigger" ng-click="addCard(list)">Add new card...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="list" ng-show="isCreatingList">
        <div class="list-container">
            <form style="display: flex" ng-submit="submitNewList()">
                <input type="text" placeholder="List name" ng-model="listTitle" required/>
                <div class="new-list-controls">
                    <button class="btn btn-block btn-success" type="submit"><i class="fa fa-plus"></i></button>
                    <a class="btn btn-block btn-danger" ng-click="cancelAddList()"><i class="fa fa-ban"></i></a>
                </div>
            </form>
        </div>
    </div>
    <div class="list new-list" id="newList" ng-show="!isCreatingList">
        <a id="newListTrigger" ng-click="addList()">Add new list...</a>
    </div>
</div>