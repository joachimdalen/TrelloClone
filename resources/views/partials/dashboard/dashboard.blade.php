@extends('app')
@section('content')
    <div class="fill-page-container dashboard-base">
        <h1 class="sub-header sub-header-dark">Your and your teams boards</h1>
        <div class="dashboard-container flexcontainer">

            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus issues</p>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus issues</p>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus issues</p>
                </div>
            </div>
            <div class="dashboard-card">
                <div class="dcard-title">
                    <span>Task list creation</span>
                    <img src="/img/board.png">
                </div>
                <div class="dcard-content">
                    <p class="sub-header no-italic sub-header-dark">Projects related to the creation of TaskList, plus issues</p>
                </div>
            </div>
            {{-- <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>
             <div class="dashboard-card">
                 <div class="dcard-title">
                     <span>My Board</span>
                     <img src="http://placehold.it/120x120">
                 </div>
                 <div class="dcard-content">
                     <table>
                         <tr>
                             <td><i class="fa fa-user"></i></td>
                             <td>Joachim Dalen</td>
                             <td><i class="fa fa-calendar"></i></td>
                             <td>01.01.2017</td>
                         </tr>
                         <tr>
                             <td><i class="fa fa-users"></i></td>
                             <td>25</td>
                             <td><i class="fa fa-list"></i></td>
                             <td>255</td>
                         </tr>
                     </table>
                 </div>
             </div>--}}


            {{--  <table>
                  <tr>
                      <th>Name</th>
                      <th>Created</th>
                      <th></th>
                  </tr>
                  <tr>
                      <td>MyBoard</td>
                      <td>45 days ago</td>
                      <td>
                          <a class="tool-button button-green" href="#"><i class="fa fa-users"></i> Open</a>
                          <a class="tool-button button-red" href="#"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                  </tr>
              </table>--}}
        </div>
    </div>
@stop
@section('scripts')
    <script src="/js/dashboard/dashboard.js"></script>
    <script rel="script">
        $(document).ready(function () {

        });
    </script>
@stop