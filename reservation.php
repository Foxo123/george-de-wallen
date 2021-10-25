<link rel="stylesheet" href="./css/style.css">
<script>
    $('.datepicker').datepicker();
</script>

<div class="container" id="reservation">
    <div class="row">
        <div class="col-12" id="header-text" style="border-bottom-style: solid;">
            <h1 style="padding-bottom: 50px; padding-top: 50px;">
                Book your reservation
            </h1>
        </div>
    </div>
    <div class="row" style="padding-top: 50px;">
            <div class="col-xs-12 col-sm-6" style="border-right: solid;">
                <!--image -->
                <img src="./img/plattegrond.jpg" alt="plattegrond" id="reservation-img">
                <small class="form-text text-muted">map of the restaurant</small>
            </div>
            <div class="col-xs-12 col-lg-6" style="border-left: solid, 1px;" id="reservation">
                <div class="row" style="margin-left: 50px;">
                    <!-- time,date,table -->
                    <form action="./index.php?content=reservation_script" method="post">
                    <div class="form-group">
                            <p>Name:</p>
                            <input name="reservation-name" type="text" class="form-control" id="InputName" aria-describedby="dateHelp">
                    </div>
                    <hr>
                    <div class="form-group" id="reservationform">
                            <input name="date" type="date" class="form-control" id="InputDate" aria-describedby="dateHelp">
                    </div>
                    <hr>
                    <div id="reservationform">
                        <select class="form-select" aria-label="table-select" name="table-select" style="width: 500px;" id="reservation-selectors">
                            <option selected>Table selection</option>
                            <option value="T1">T-1</option>
                            <option value="T2">T-2</option>
                            <option value="T3">T-3</option>
                            <option value="T4">T-4</option>
                            <option value="T5">T-5</option>
                            <option value="T6">T-6</option>
                            <option value="T7">T-7</option>
                            <option value="T8">T-8</option>
                            <option value="T9">T-9</option>
                            <option value="T10">T-10</option>
                            <option value="T11">T-11</option>
                            <option value="T12">T-12</option>
                            <option value="R1">R-1</option>
                            <option value="R2">R-2</option>
                            <option value="R3">R-3</option>
                            <option value="R4">R-4</option>
                            <option value="R5">R-5</option>
                            <option value="R6">R-6</option>
                            <option value="Bar">Bar</option>
                        </select>
                    </div>
                    <hr>
                    <div id="reservationform">
                        <select class="form-select" aria-label="time-select" name="time-select" style="width: 500px;" id="reservation-selectors">
                            <option selected>time selection</option>
                            <option value="17:30-19:30">17:30-19:30</option>
                            <option value="18:00-20:00">18:00-20:00</option>
                            <option value="18:30-20:30">18:30-20:30</option>
                            <option value="19:00-21:00">19:00-21:00</option>
                            <option value="19:30-21:30">19:30-21:30</option>
                            <option value="20:00-22:00">20:00-22:00</option>
                        </select>
                    </div>
                    <div style="padding-top: 45px;">
                        <button type="submit" class="btn btn-secondary btn-lg btn-block mt-4 ">Submit</button>
                    </div>
                    </form>
             </div>
        </div>
        <div class="row" id="important-info-reservation">
            <div id="info-res-text">
                <h2>
                    Important info!
                </h2>
                <h3>
                    when reserving please keep in mind that we have a 15 minute time period when you will have to check in.
                    If you have any questions please <a href="./index.php?content=contact">contact us</a>
                </h3>
             </div>
        </div>
    </div>