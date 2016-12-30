<div id="newCardModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <input type="text" placeholder="Title here" class="input-control">
            <span class="sub-title">in This is my new list</span>
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
            <!-- <a class="btn btn-default btn-sm" href="#"><i class="fa fa-users"></i> Members</a>-->
        </div>
        <div class="modal-body">
            {{--  <span class="sub-title no-italic">Description</span>
              <textarea class="card-description input-control" placeholder="Description"></textarea>--}}
            <div id="Description" class="tab">
                <span class="sub-title no-italic">Description</span>
                <textarea class="card-description input-control" placeholder="Description"></textarea>
            </div>

            <div id="Labels" class="tab" style="display:none">
                <span class="sub-title no-italic">Labels</span>
                <ul class="label-list">
                    <li class="label-select">Frontend</li>
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
                <span class="sub-title no-italic">Labels</span>

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
                <table class="file-table">
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
                <p>Tokyo is the capital of Japan.</p>
            </div>
            <div id="Members" class="tab" style="display:none">
                <span class="sub-title no-italic">Card members</span>
            </div>
        </div>
        <div class="modal-footer">
            <a class="tool-button tool-button-sm button-red" id="closeModal"><i class="fa fa-ban"></i> Cancel</a>
            <a class="tool-button tool-button-sm button-green" href="#"><i class="fa fa-plus-circle"></i> Add</a>
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