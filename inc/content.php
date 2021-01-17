<nav id ="header" class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" style="margin-right: 3%;"href="#">Journal</a>
    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse"   id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="allmasters" aria-haspopup="true" aria-expanded="false">All masters</a>
                <div id="dropdownMasters" class="dropdown-menu">
        
                </div>
            </li>
            <li class="nav-item dropdown onlyDesk" style="margin: 2%; ">
                <a style="color:black;" id="strLeft" href="#"><i class="bi bi-arrow-left-circle"></i></a>
            </li>
            <form class="form-inline my-2 my-lg-0 onlyDesk">
                 <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" id="date" name="date" min="2020-01-01" />
            </form>
            <li class="nav-item dropdown onlyDesk" style="margin: 2%;" >
                <a style="color:black;" id="strRight" href="#"><i class="bi bi-arrow-right-circle"></i></a>
            </li>
            <button id="todayBtn" type="button" class="btn btn-outline-dark onlyDesk" >
                Today
            </button>
        </ul> 
    </div>
    <div class="collapse navbar-collapse justify-content-end" style="margin-right: 8%;" id="navbarSupportedContent">
         <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" id="allsalons" aria-expanded="false">Beauty salon name</a>
                <div id="dropdownSalons" class="dropdown-menu">

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="username" href="#" role="button" aria-haspopup="true" aria-expanded="false">Username</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" id="logout" href="#">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="contentMain">
<form class="form-inline my-2 my-lg-0 onlyMob">
     <input class="form-control" type="date" value="<?php echo date("Y-m-d"); ?>" id="date2" name="date" min="2020-01-01" />
</form>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  Add  new order</button><br><br>
<div class="container">
  <div id="calendarGrid" class="row scrolling-wrapper-flexbox">
  </div>
</div>
<br><br>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="col">
                            Master
                            <select class="custom-select" id="inputMaster" required>
                            </select>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">     
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm">
                        <div class="col">
                            Client name
                            <input type="text" class="form-control" placeholder="Client name" aria-label="Client's username" aria-describedby="basic-addon2" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="col">
                            Phone number
                            <input type="text" class="form-control" placeholder="Phone number" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm">
                        <div class ="col">
                            <div class="current-selected-services" style="display: flex;flex-flow: column wrap;"></div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm">
                        <div class="col">
                            Services
                            <select class="custom-select" id="inputServices">
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col">
                            Date
                            <input type="date" class="form-control" value="<?php echo date("Y-m-d"); ?>"placeholder="Services" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="col">
                            Time
                            <input type="time" class="form-control" placeholder="Time" step="300" aria-describedby="basic-addon2">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="col">
                            Duration
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">h</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect02">
                                    <option value="0">0</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30" selected>30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">min</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm">
                        <div class="col">
                            Comment
                            <textarea class="form-control" placeholder="Comment"  aria-describedby="basic-addon2"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>

 
$(document).ready(function(){

    $("#todayBtn").click(function(){
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        $('#date').val(today);
    });

    $(document).on('click', '.masterSel', function () {
        var clickId = $(this).attr('id');
        $("#allmasters").html($("#" + clickId).html());
    });

    $(document).on('click', '.salonSel', function () {
        var clickId = $(this).attr('id');
        $("#allsalons").html($("#" + clickId).html());
        $("#allsalons").attr('idSalon', $("#" + clickId).attr('idSalon'));
        getMasters();
    });

    $("#todayBtn").click(function(){
        $("#todayBtn").addClass("disabled");
    });

    $("#date").change(function(){
        $("#todayBtn").removeClass("disabled");
    });

    $("#strRight").click(function(){
        $("#todayBtn").removeClass("disabled");
        var dateControl = document.querySelector('#date');
        var valDate = dateControl.valueAsNumber;
        valDate = valDate + (1000 * 60 * 60 * 24);
        var newDate = new Date(valDate);
        var day = ("0" + newDate.getDate()).slice(-2);
        var month = ("0" + (newDate.getMonth() + 1)).slice(-2);
        var resDate = newDate.getFullYear()+"-"+(month)+"-"+(day) ;
        $('#date').val(resDate);
    });

    $("#strLeft").click(function(){
        $("#todayBtn").removeClass("disabled");
        var dateControl = document.querySelector('#date');
        var valDate = dateControl.valueAsNumber;
        valDate = valDate - (1000 * 60 * 60 * 24);
        var newDate = new Date(valDate);
        var day = ("0" + newDate.getDate()).slice(-2);
        var month = ("0" + (newDate.getMonth() + 1)).slice(-2);
        var resDate = newDate.getFullYear()+"-"+(month)+"-"+(day) ;
        $('#date').val(resDate);
    });

    $("#logout").click(function(){
        $.getJSON( "inc/calendar.php?calendarevent=" + 4 )
        .done(function( json ) {

        })
        .fail(function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        });
    });

    $.getJSON( "inc/calendar.php?calendarevent=" + 2 )
    .done(function( json ) {
        $('#username').html(json);
    })
    .fail(function( jqxhr, textStatus, error ) {
        var err = textStatus + ", " + error;
        console.log( "Request Failed: " + err );
    });

    $.getJSON( "inc/calendar.php?calendarevent=" + 1 )
    .done(function( json ) {
        var select = document.getElementById('dropdownSalons');
        if(json)
        {
            for (var i = 0; i< json.length; i++)
            {
                var a = document.createElement('a');
                a.value = json[i].id;
                a.innerHTML = json[i].name;
                a.className = "dropdown-item salonSel";
                a.id = "salonSel" + i;
                a.setAttribute('href', "#");
                a.setAttribute('idSalon', json[i].id);
                select.appendChild(a);
            }
            $("#allsalons").html($("#salonSel0").html());
            $("#allsalons").attr('idSalon', json[0].id);
            getMasters();
        }
    })
    .fail(function( jqxhr, textStatus, error ) {
        var err = textStatus + ", " + error;
        console.log( "Request Failed: " + err );
    });

    function getMasters()
    {
        var myNode = document.getElementById("dropdownMasters");
        while (myNode.firstChild) {
            myNode.removeChild(myNode.firstChild);
        }
        var myNode = document.getElementById("inputMaster");
        while (myNode.firstChild) {
            myNode.removeChild(myNode.firstChild);
        }
        $.getJSON( "inc/calendar.php?calendarevent=" + 3 + "&salon_id=" + $("#allsalons").attr('idSalon'))
        .done(function( json ) {
            var select = document.getElementById('dropdownMasters');
            var optionModal = document.getElementById('inputMaster');
            var selectModal0 = document.createElement('option');
            selectModal0.value = "0";
            selectModal0.innerHTML = "Choose...";  
            selectModal0.id = "masterSelModal0";
            optionModal.appendChild(selectModal0);
            if(json)
            {
                for (var i = 0; i< json.length; i++)
                {
                    //to dropdown
                    var a = document.createElement('a');
                    a.value = json[i].id;
                    if(json[i].fio == "")
                    {
                        a.innerHTML = "(Ф.И.О. мастера не указана)"; 
                    }
                    else
                    {
                        a.innerHTML = json[i].fio;  
                    }
                    a.className = "dropdown-item masterSel";
                    a.id = "masterSel" + i;
                    a.setAttribute('href', "#");
                    select.appendChild(a);

                    //to modal
                    var selectModal = document.createElement('option');
                    selectModal.value = json[i].id;
                    if(json[i].fio == "")
                    {
                        selectModal.innerHTML = "(Ф.И.О. мастера не указана)"; 
                    }
                    else
                    {
                        selectModal.innerHTML = json[i].fio;  
                    }
                    selectModal.id = "masterSelModal" + i;
                    optionModal.appendChild(selectModal);
                }
            }
        })
        .fail(function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        });

        getServices();
        getBooking();
    }

    function getBooking()
    {
        var myNode = document.getElementById("calendarGrid");
        while (myNode.firstChild) 
        {
            myNode.removeChild(myNode.firstChild);
        }
        $.getJSON( "inc/calendar.php?calendarevent=" + 5 + "&salon_id=" + $("#allsalons").attr('idSalon'))
        .done(function( json ) {
            
            var divStart = document.getElementById('calendarGrid');
            if(json)
            {
                for (var i = 0; i< json.length; i++)
                {
                    var div = document.createElement('div');
                    div.className = "col table";
                    div.id = "el1_" + i;
                    divStart.appendChild(div);

                    var el1 = document.getElementById('el1_' + i);
                    var table = document.createElement('table');
                    table.className = "tableCalendar";
                    table.id = "el2_" + i;
                    el1.appendChild(table);

                    var el2 = document.getElementById('el2_' + i);
                    var thead = document.createElement('thead');
                    thead.className = "theadCalendar";
                    thead.id = "el3_" + i;
                    el2.appendChild(thead);

                    var el3 = document.getElementById('el3_' + i);
                    var el4 = document.createElement('tr');
                    el4.className = "trthCalendSecond";
                    el4.id = "el4_" + i;
                    el3.appendChild(el4);

                    var el4 = document.getElementById('el4_' + i);
                    var el5 = document.createElement('th');
                    el5.id = "el5_" + i;
                    el5.className = "thCalendFirst";
                    el5.setAttribute('scope', "col");
                    el4.appendChild(el5);

                    var el5 = document.getElementById('el5_' + i);
                    var el6 = document.createElement('th');
                    el6.id = "el6_" + i;
                    el6.className = "thCalendSecond";
                    el6.setAttribute('scope', "col");
                    el4.appendChild(el6);

                    var el12 = document.createElement('div');
                    el12.id = "el12_" + i;
                    el12.className = "divCalendTable";
                    el12.innerHTML = json[i].fio;  
                    el6.appendChild(el12);

                    var el13 = document.createElement('div');
                    el13.id = "el13_" + i;
                    el13.className = "divCalendTable";
                    el13.innerHTML = "#";  
                    el5.appendChild(el13);

                    var el7 = document.createElement('tbody');
                    el7.id = "el7_" + i;
                    el2.appendChild(el7);

                    for($i=0;$i<32;$i++)
                    {
                        var el8 = document.createElement('tr');
                        el8.id = "el8_" + i;
                        el7.appendChild(el8);

                        var el9 = document.createElement('td');
                        el9.id = "el9_" + i;
                        el9.className = "colCalendFirst";
                        el9.setAttribute('scope', "row");
                        el9.setAttribute('data-toggle', "modal");
                        el9.setAttribute('data-target', "#exampleModal");
                        el9.setAttribute('data-whatever', "@mdo");
                        if($i % 2 == 0)
                        {
                            var first = 6 + Math.trunc($i / 2);
                            var second = 0;
                            el9.innerHTML = "<b>" + first + ":" + second + "0</b>";
                        }
                        else
                        {
                            var first = 6 + Math.trunc($i / 2);
                            var second = 3;
                            el9.innerHTML = first + ":" + second + "0";
                        }
                        
                        el8.appendChild(el9);

                        var el10 = document.createElement('td');
                        el10.id = "el10_" + i;
                        el10.className = "colCalendSecond";
                        el8.appendChild(el10);

                        var el11 = document.createElement('a');
                        el11.id = "el11_" + i;
                        el11.className = "aModal";
                        el11.setAttribute('data-toggle', "modal");
                        el11.setAttribute('data-target', "#exampleModalScrollable");
                        el11.setAttribute('href', "#modal1");
                        el11.innerHTML = "tdd";
                        el10.appendChild(el11);
                    }                  
                }
            }
            else {
                var el14 = document.createElement('div');
                el14.id = "el13_" + i;
                el14.className = "divCalendTable";
                el14.innerHTML = "В данном салоне нет ещё ни одного мастера.";  
                divStart.appendChild(el14);
            }
        })
        .fail(function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        });
    }

    function getServices()
    {
        var myNode = document.getElementById("inputServices");
        while (myNode.firstChild) 
        {
            myNode.removeChild(myNode.firstChild);
        }
        $.getJSON( "inc/calendar.php?calendarevent=" + 6)
        .done(function( json ) {
            var select = document.getElementById('inputServices');
            if(json)
            {
                for (var i = 0; i< json.length; i++)
                {
                    var optgroup = document.createElement('optgroup');
                    optgroup.setAttribute('label', json[i].groupname );
                    optgroup.id = "serviceOptgr" + i;
                    optgroup.setAttribute('value', json[i].id);
                    select.appendChild(optgroup);

                    for (var j = 0; j< json[i].items.length; j++)
                    {
                        var option = document.createElement('option');
                        option.value = json[i].items[j].id;
                        option.innerHTML = json[i].items[j].name + " | " + json[i].items[j].price;
                        option.id = "serviceOption" + i + "_" + j;
                        optgroup.appendChild(option);
                    }
                }           
            }
        })
        .fail(function( jqxhr, textStatus, error ) {
            var err = textStatus + ", " + error;
            console.log( "Request Failed: " + err );
        });
    }
   
});   
</script>