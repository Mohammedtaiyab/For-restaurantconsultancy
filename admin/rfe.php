<?php require('functions.php');
$data = $startup->getactivedata();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Start up Applications</title>
    <link rel="icon" type="image/x-icon" href="images/logo2.png" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        /*.navbar .navbar-item.navbar-dropdown {
            margin-left: auto;
        }*/
        .layout-px-spacing {
            min-height: calc(100vh - 184px) !important;
        }

        .custom-bg {
            background: #bfbfde;
            color: #000;
            font-weight: 600;
        }

        .table tr {
            background: #e0e6ed;
            margin: 20px;
        }

        .table {
            border-collapse: separate;
            border-spacing: 0 1em;
        }

        .viewmobile {
            display: none;
        }

        @media only screen and (max-width: 768px) {

            /* For mobile phones: */
            .viewdesk {
                display: none;
            }

            .viewmobile {
                display: block;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>

<body class="sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar ">



            <div class="nav-logo align-self-center" style="display: block;">
                <a class="navbar-brand" href="index.php"><img alt="logo" src="images/logo2.png"> <span class="navbar-brand-name"></span></a>
            </div>
    <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown notification-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg><span class="badge badge-success"></span>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="notificationDropdown">
                        <div class="notification-scroll">
<?php if(isset($_SESSION["shopping_cart"])){
  
$usercart=$_SESSION["shopping_cart"];
if(count($usercart)>0){
foreach ($usercart as $value) {?>
  <div class="dropdown-item">
     <div class="media server-log">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg>
              <div class="media-body">
           <div class="data-info">
                      <h6 class=""><?php echo $value["SID"];?></h6>
                    <p class=""><?php echo $value["item_sector"];?></p>
              </div>

               <div class="icon-status">
                    <a href="?action=delete&id=<?php echo $value["item_id"];?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </div>
                                    </div>
                                </div>
                            </div>
                            
                            

<?php }
 }else{ ?>

 <div class="dropdown-item">
     <div class="media server-log">
         
              <div class="media-body">
           <div class="data-info">
                      <h6 class="">Add Something to Cart</h6>
                  
              </div>         </div>
                                </div>
<?php } 


 }else{?>

 
                            
<?php }
?>
                          
                    
                        </div>
             
                </li>
</ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  END TOPBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="card">





                <div class="card-content collapse show">
                    <div class="card-body">
                        <div class="users-list-filter">
                            <form>
                                <div class="row">

                                    <div class="col-12 col-sm-6 col-lg-5">
                                        <div class="search-input-group-style input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                        <circle cx="11" cy="11" r="8"></circle>
                                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                    </svg></span>
                                            </div>
                                            <input type="text" id="keysearch" onkeyup="searchbykey()" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">

                                        <div class="btn-group mb-4 mr-2 show" role="group" style="width: inherit;">
                                            <button id="btndefault" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>By Sector<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></button>

 <?php 
 $i = 1;
 $sectorlist=["agriculture-agritech","automotive","cleantech","construction-real-estatea","consulting","digital-marketing","e-commerce-marketplace","edtech","entertainment-media-advertisingrtising","fintech","healthtech-wellness","b2b-software-services","iot","deep-tech-ai-ml","life-science-pharma","logistics","manufacturing","consumer-services","mobile-app-utilities-gamess","mobile-app-mobility","non-profit","foodtech-f-and-b","retail-consumer","sports","travel-traveltech","others"];
 $sectordata=[]; 
  $sectorcount=[]; 
 foreach ($data as $apply) {
  $datasector=$apply["Sector"];
    array_push($sectordata,$datasector);
}
$x=0;
while($x < count($sectorlist)) {
    if (in_array($sectorlist[$x], $sectordata)){
            if (in_array($sectorlist[$x], $sectorcount)){
             $sectorcount[$sectorlist[$x]]+=1;
                 }else{
                       $sectorcount[$sectorlist[$x]]=1;
                 }
            
    }else{
        $sectorcount[$sectorlist[$x]]=0;
    }
  $x++;
}

  ?>


                                            <div class="dropdown-menu" aria-labelledby="btndefault" style="will-change: transform; position: absolute; transform: translate3d(0px, -194px, 0px); top: 0px; left: 0px;" x-placement="top-start">
                                                        <?php 
                                                        foreach ($sectorcount as $key => $value) { ?>
 <a href="javascript:void(0);" onclick="sectorsearch('<?php echo $key; ?>')" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i><?php echo ucwords(str_replace("-", " ", $key))?> <?php if($value!=0){echo "(".$value.")";}?></a>
                                                       <?php } ?>
 
                                               
                                              


                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <div class="btn-group mb-4 mr-2" role="group" style="width:inherit">
                                            <button id="btndefault" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>Funds<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></button>
                                            <div class="dropdown-menu" aria-labelledby="btndefault" style="will-change: transform; position: absolute; transform: translate3d(0px, -194px, 0px); top: 0px; left: 0px;" x-placement="top-start">
                                                <a href="javascript:void(0);" onclick="fundsearch('50')" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Less than US $500,000</a>
                                                <a href="javascript:void(0);" onclick="fundsearch('51')" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>US $500,000 - US $1 Million</a>
                                                <a href="javascript:void(0);" onclick="fundsearch('105')" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>US $1 Million - US $5 Million</a>
                                                <a href="javascript:void(0);" onclick="fundsearch('510')" class="dropdown-item"><i class="flaticon-dots mr-1"></i>US $5 Million - US $10 Million</a>
                                                <a href="javascript:void(0);" onclick="fundsearch('100')" class="dropdown-item"><i class="flaticon-dots mr-1"></i>US $10 Million +</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-2">
                                        <div class="btn-group mb-4 mr-2" role="group" style="width:inherit">
                                            <button id="btndefault" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                                </svg>Stage<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                    <polyline points="6 9 12 15 18 9"></polyline>
                                                </svg></button>
                                            <div class="dropdown-menu" aria-labelledby="btndefault" style="will-change: transform; position: absolute; transform: translate3d(0px, -194px, 0px); top: 0px; left: 0px;" x-placement="top-start">
                                                <a href="javascript:void(0);" onclick="statesearch('idea-stage')" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Idea Stage</a>
                                                <a href="javascript:void(0);" onclick="statesearch('mvp-stage')" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>MVP Stage</a>
                                                <a href="javascript:void(0);" onclick="statesearch('pre-revenue-stage')" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Pre-Revenue Stage</a>
                                                <a href="javascript:void(0);" onclick="statesearch('early-revenue-stage-poc-limited-launch-etc')" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Early-Revenue Stage (PoC / Limited Launch etc.)</a>
                                                <a href="javascript:void(0);" onclick="statesearch('revenue-generating-stage')" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Revenue Generating Stage</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <div class="table-responsive mb-4 mt-4">
                            <table id="datatable" class="table table-hover" style="width:100%">
                                <!-- <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead> -->

                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data as $apply) {
                                        $fund = "";
                                        if ($apply["Funds"] == 50) {
                                            $fund = "Less than US $500,000";
                                        } else if ($apply["Funds"] == 51) {
                                            $fund = "US $500,000 - US $1 Million";
                                        } else if ($apply["Funds"] == 105) {
                                            $fund = "US $1 Million - US $5 Million";
                                        } else if ($apply["Funds"] == 510) {
                                            $fund = "US $5 Million - US $10 Million";
                                        } else {
                                            $fund = "US $10 Million +";
                                        }
                                    ?>

                                        <tr>
                                            <td style="display:none"></td>
                                            <td style="display:none"><?php echo $apply["Funds"]; ?></td>
                                            <td style="display:none"><?php echo $apply["Sector"]; ?></td>
                                            <td style="display:none"><?php echo $apply["Current_State"]; ?></td>
                                            <td>
                                                <div class="viewdesk">
                                                        <h6>#<?php echo $apply["SID"]; ?></h6>
                                                    <div class="d-flex">
                                                        <div class="p-2 bd-highlight">
                                                            <div class="card p-2 custom-bg"><?php echo ucwords(str_replace("-", " ", $apply["Sector"])); ?></div>
                                                        </div>
                                                        <div class="p-2  bd-highlight">
                                                            <div class="card p-2 custom-bg"><?php echo ucwords(str_replace("-", " ", $apply["Current_State"])); ?></div>
                                                        </div>
                                                        <div class="p-2  bd-highlight">
                                                            <div class="card p-2 custom-bg"><?php echo $fund; ?></div>
                                                        </div>
                                                        <div class="p-2 flex-grow-1 bd-highlight">
                                                            <div class=" p-2 " style=" float: right;"> <a href="?action=add&id=<?php echo $apply["ID"]; ?>">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></a></div>
                                                        </div>

                                                    </div>
                                                     <a href="application.php?id=<?php echo  $apply["ID"]; ?>">
                                                    <div class="d-flex">
      
                                                        <div class="p-2 flex-grow-1 bd-highlight">
                                                            <p><?php echo ucwords(str_replace("-", " ", $apply["Summary"]));
                                                                ?></p>
                                                        </div>
                                                        
                                                    </div>
                                                    </a>
                                                </div>



                                                <div class="viewmobile">

                                                    <div id="th_17a232d229ab906f" class="" role="listitem">
                                                        <a href="application.php?id=<?php echo  $apply["ID"]; ?>">
                                                            <div class="card-columns">
                                                                <h4 class="font-weight-bold"><?php echo  $apply["Startup_Name"]; ?></h4>
                                                                <p><span class="font-weight-bold"><?php echo ucwords(str_replace("-", " ", $apply["Sector"])); ?> | <?php echo ucwords(str_replace("-", " ", $apply["Current_State"])); ?></span></p>
                                                                <p><span class="font-weight-bold"><?php echo $fund; ?></span></p>
                                                            </div>
                                                            <div class="card-columns">
                                                                <p><?php echo ucwords(str_replace("-", " ", $apply["Summary"]));
                                                                    ?></p>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>






                                            </td>
                                        </tr>

                                    <?php $i++;
                                    } ?>
                                   <tr id="nodata" style="display:none;"> <th>No Data Found </th> </tr>
                                </tbody>


                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="plugins/table/datatable/datatables.js"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
    </script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        function fundsearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchbyfund");
            filter = input.value.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
          
        }


        function fundsearch(input) {
            var filter, table, tr, td, i, txtValue;var cont=0;
            // input = document.getElementById("searchbyfund");
            filter = input.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                            cont++;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
              if(cont<1){
                        document.getElementById("nodata").style.display="";
            }else{
                    document.getElementById("nodata").style.display="none";
            }
        }






        function sectorsearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchbysector");
            filter = input.value.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }


        function sectorsearch(input) {
            var filter, table, tr, td, i, txtValue;
            //input = document.getElementById("searchbysector");
            filter = input.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            var cont=0;
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        cont++;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
           
            if(cont<1){
                        document.getElementById("nodata").style.display="";
            }else{
                    document.getElementById("nodata").style.display="none";
            }
        }



        function statesearch() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchbystate");
            filter = input.value.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }



        function statesearch(input) {
            var input, filter, table, tr, td, i, txtValue;var cont=0;
            // input = document.getElementById("searchbystate");
            filter = input.toUpperCase();
            console.log(filter);
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[3];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    console.log(filter + " " + txtValue);
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        cont++;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
                if(cont<1){
                        document.getElementById("nodata").style.display="";
            }else{
                    document.getElementById("nodata").style.display="none";
            }
        }

        function viewdata(id) {
            $.ajax({
                type: 'POST',
                url: "../functions.php",
                data: "viewbyid=" + id,
                dataType: "json",
                success: function(resultData) {
                    var fund = "";
                    if (resultData[0].Funds == 50) {
                        fund = "Less than US $500,000";
                    } else if (resultData[0].Funds == 51) {
                        fund = "US $500,000 - US $1 Million";
                    } else if (resultData[0].Funds == 105) {
                        fund = "US $1 Million - US $5 Million";
                    } else if (resultData[0].Funds == 510) {
                        fund = "US $5 Million - US $10 Million";
                    } else {
                        fund = "US $10 Million +";
                    }

                    $("#funds").html(fund);
                    // ucwords(str_replace("-", " ", $data[0]["Current_State"]))
                    var states = resultData[0].Current_State;
                    states = states.replaceAll("-", " ");
                    $("#state").html(states);
                    var sector = resultData[0].Sector;
                    sector = sector.replaceAll("-", " ");
                    $("#sector").html(sector);
                    $("#summary").html(resultData[0].Summary);

                }
            });

            $("#viewdata").modal("toggle");
        }

        function searchbykey() {
            var input, filter, table, tr, td, i, txtValue;var cont=0;
            input = document.getElementById("keysearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("datatable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        cont++;
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }   if(cont<1){
                        document.getElementById("nodata").style.display="";
            }else{
                    document.getElementById("nodata").style.display="none";
            }
            
        }
    </script>
</body>

</html>