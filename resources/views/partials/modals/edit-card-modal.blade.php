<div id="editCardModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" id="closeEditCardSpan" ng-click="modalClose()">&times;</span>
            <input id="card-edit-field" type="text" placeholder="Title here" class="input-control"
                   style="display: none">
            {{--
            Make this button be inline with with the input control
          <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-check"></i></a>
          --}}
            <span id="card-edit-label" class="input-control edit-label">@{{ currentCard.name}}</span>
            <span class="sub-title"> in @{{ currentList.name}}</span>
        </div>
        <div class="modal-toolbar modal-toolbar-status modal-toolbar-dates">
            <span class="modal-toolbar-date" style="display: none; color:green;" id="card-created"><i
                        class="fa fa-clock-o"></i> Created: @{{currentCard.created_at}}</span>
            <span class="modal-toolbar-date" id="card-age" style="color:green;"><i class="fa fa-calendar"></i> Age: 64 Days (Click me)</span>
            <span class="modal-toolbar-date" id="card-updated" style="color:orange;"><i class="fa fa-clock-o"></i> Updated: @{{currentCard.updated_at}}
                </span>
            <span class="modal-toolbar-date" id="card-due" style="color:red;"><i
                        class="fa fa-clock-o"></i> Due: @{{currentCard.due_at}}</span>

        </div>
        <div class="modal-toolbar modal-toolbar-status">
            <div class="modal-labels" id="modal-labels">
                {{--<span class="label label-bg label-red">Default</span> <span
                        class="label label-bg label-primary">Primary</span><span class="label label-bg label-green">Success</span>
                <span class="label label-bg label-red">Default</span>
                <span class="label label-bg label-primary">Primary</span>
                <span class="label label-bg label-green">Success</span>
                <span class="label label-bg label-red">Default</span>
                <span class="label label-bg label-primary">Primary</span>
                <span class="label label-bg label-green">Success</span>--}}
            </div>
        </div>
        <div class="modal-toolbar">
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Description')"><i
                        class="fa fa-comment"></i> Description</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Labels')"><i
                        class="fa fa-tags"></i> Labels</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Checklists')"><i
                        class="fa fa-check"></i> Checklists</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Attachments')"><i
                        class="fa fa-paperclip"></i> Attachments</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('DueDate')"><i
                        class="fa fa-calendar"></i> Due Date</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Members')"><i
                        class="fa fa-users"></i> Members</a>
            <a class="tool-button tool-button-sm" href="javascript:void(0)" onclick="openTab('Other')"><i
                        class="fa fa-exclamation"></i> Other</a>
            <!-- <a class="btn btn-default btn-sm" href="#"><i class="fa fa-users"></i> Members</a>-->
        </div>
        <div class="modal-body">
            {{--  <span class="sub-title no-italic">Description</span>
              <textarea class="card-description input-control" placeholder="Description"></textarea>--}}
            <div id="Description" class="tab">
                <span class="sub-title no-italic">Description</span>
                <textarea class="card-description input-control"
                          placeholder="Description">@{{ currentCard.description }}</textarea>
            </div>

            <div id="Labels" class="tab" style="display:none">
                <span class="sub-title no-italic">Labels</span>
                <ul class="label-list" id="labelList">
                    <li class="label-select" data-tag="f5g8g42">Frontend</li>
                    <li class="label-select">Backend</li>
                    <li class="label-select">Frontend</li>
                    <li class="label-select">Backend</li>
                    <li class="label-select">Frontend</li>
                    <li class="label-select">Backend</li>
                    <li class="label-select">Frontend</li>
                    <li class="label-select">Backend</li>
                </ul>
            </div>

            <div id="Checklists" class="tab" style="display:none">
                <span class="sub-title no-italic">Checklist</span>
                <div class="modal-section-toolbar">
                    <input type="text" placeholder="Name" class="input-control">
                    <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="modal-checklist">

                </div>
                <span>No lists so far, why don't you add one?</span>

            </div>
            <div id="Attachments" class="tab" style="display:none">
                <span class="sub-title no-italic">Attachments</span>
                <div class="modal-section-toolbar">
                    {{-- <input type="text" placeholder="Select a file to upload" class="input-control" disabled>
                     <a class="tool-button tool-button-sm" href="#"><i class="fa fa-upload"></i></a>--}}
                    <div class="upload-container">
                        <h1>Drop files here or click to upload.</h1>
                    </div>
                </div>
                <table class="modal-table">
                    <tr>
                        <th></th>
                        <th>Filename</th>
                        <th>Uploaded</th>
                        <th>By</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td><i class="fa fa-upload"></i></td>
                        <td>thisisaverylongfilenamethisisaverylongfilename.png</td>
                        <td>25.12.2016</td>
                        <td>John Doe</td>
                        <td class="td-controls">
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-check"></i></a>
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-eye"></i></a>
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-download"></i></a>
                            <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-file-image-o"></i></td>
                        <td>overflow.png</td>
                        <td>25.12.2016</td>
                        <td>John Doe</td>
                        <td class="td-controls">
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-check"></i></a>
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-eye"></i></a>
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-download"></i></a>
                            <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-file-pdf-o"></i></td>
                        <td>Smith</td>
                        <td>25.12.2016</td>
                        <td>John Doe</td>
                        <td class="td-controls">
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-eye"></i></a>
                            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-download"></i></a>
                            <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="DueDate" class="tab" style="display:none">
                <h2>Due Date</h2>
            </div>
            <div id="Members" class="tab" style="display:none">
                <span class="sub-title no-italic">Card members</span>
                <div class="modal-section-toolbar">
                    <input type="text" placeholder="Username" class="input-control">
                    <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-plus-circle"></i></a>
                </div>
                <table class="modal-table user-table">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    <tr ng-repeat="member in currentCard.members">
                        <td>
                            <img src="@{{member.user.avatar}}">
                        </td>
                        <td>@{{ member.user.name }}</td>
                        <td class="td-controls">
                            <a class="tool-button tool-button-sm button-red"
                               ng-click="removeMemberFromCard(member)">
                                <i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    {{-- <tr>
                         <td>
                             <img src="https://s3-us-west-2.amazonaws.com/slack-files2/avatars/2016-09-13/79369562049_f5a05444d950158f24e9_44.png">
                         </td>
                         <td>John Doe</td>
                         <td class="td-controls">
                             <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-times"></i></a>
                         </td>
                     </tr>
                     <tr>
                         <td><img src="https://trello-avatars.s3.amazonaws.com/5f93b9cfa2beb599f4d2e1337f639ef2/30.png">
                         </td>
                         <td>John Doe</td>
                         <td class="td-controls">
                             <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-times"></i></a>
                         </td>
                     </tr>
                     <tr>
                         <td><img src="http://placehold.it/50x50"></td>
                         <td>John Doe</td>
                         <td class="td-controls">
                             <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-times"></i></a>
                         </td>
                     </tr>--}}

                </table>
            </div>
            <div id="Other" class="tab" style="display:none">
                <span class="sub-title no-italic">Other</span>
                <div class="modal-card-container">
                    <div class="modal-card">
                        <span>Delete</span>
                        <p>Deleting a card is a irreversible action. If you want to hide a card from the list press
                            "Archive"
                            and it can be retrieved from the archive at a later point. </p>
                        <input type="checkbox" id="confirmDelete">
                        <label for="confirmDelete">Check to confirm deletion</label>
                        <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <div class="modal-card">
                        <span>Delete</span>
                        <p>Deleting a card is a irreversible action. If you want to hide a card from the list press
                            "Archive"
                            and it can be retrieved from the archive at a later point. </p>
                        <input type="checkbox" id="confirmDelete">
                        <label for="confirmDelete">Check to confirm deletion</label>
                        <a class="tool-button tool-button-sm button-red" href="#"><i class="fa fa-trash"></i> Delete</a>
                    </div>
                    <!--
                             Some clever way to display more options?
                              - Card layout with image and description for each action?
                              - List (This would only mean a short description
                    -->
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a class="tool-button tool-button-sm " id="closeEditCardButton"><i class="fa fa-ban"></i> Cancel</a>
            <a class="tool-button tool-button-sm" href="#"><i class="fa fa-archive"></i> Archive</a>
            <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-save"></i> Save</a>
        </div>
    </div>
</div>
<script>
    function openTab(tabName) {
        var i;
        var x = document.getElementsByClassName("tab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(tabName).style.display = "block";
    }

</script>