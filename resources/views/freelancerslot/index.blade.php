@extends('layouts.navbar')

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="calendar-11/fonts/icomoon/style.css">
    <link rel="stylesheet" href="calendar-11/css/default.css">
    <link rel="stylesheet" href="calendar-11/css/default.date.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="calendar-11/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="calendar-11/css/style.css">

    <title>Freelancer Slot</title>
</head>

<body>

    <div class="content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <h2 class="mb-5 text-center">{{ $freelancer->name }} Freelancer Schedule For
                        {{ $skill->description }}</h2>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control text-center" name="bookingDate" id="pick-date"
                                placeholder="Pick A Date">

                            <div class="form-group">
                                <a data-slot="1" class="slotSelection list-group-item list-group-item-action active"
                                    aria-current="true"><button
                                    class="btn btn-primary me-md-2" type="button">9.00am - 10.00am slot</button></a>
                                <a data-slot="2" class="slotSelection list-group-item list-group-item-action active"><button
                                        class="btn btn-primary me-md-2" type="button">10.00am - 11.00noon
                                        slot</button></a>
                                <a data-slot="3" class="slotSelection list-group-item list-group-item-action active"><button
                                        class="btn btn-primary me-md-2" type="button">11.00am - 12.00noon
                                        slot</button></a>
                                <a data-slot="4" class="slotSelection list-group-item list-group-item-action active"><button
                                        class="btn btn-primary me-md-2" type="button">1.00pm - 2.00pm slot</button></a>
                                <a data-slot="5" class="slotSelection list-group-item list-group-item-action active"><button
                                        class="btn btn-primary me-md-2" type="button">2.00pm - 3.00pm slot</button></a>
                                <a data-slot="6" class=" slotSelection list-group-item list-group-item-action active"><button
                                        class="btn btn-primary me-md-2" type="button">3.00pm - 4.00pm slot</button></a>
                                <a data-slot="7" class=" slotSelection list-group-item list-group-item-action disabled">4.00pm -5.00pm
                                    slot</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script src="calendar-11/js/jquery-3.3.1.min.js"></script>
    <script src="calendar-11/js/popper.min.js"></script>
    <script src="calendar-11/js/bootstrap.min.js"></script>
    <script src="calendar-11/js/picker.js"></script>
    <script src="calendar-11/js/picker.date.js"></script>
    <script>
        $(function() {

            $('#pick-date').pickadate({
                min: new Date(),
                //disabled: []
            });
            $('#pick-date').trigger("click");

            $('.slotSelection').on("click", (event) => {
              const element = event.currentTarget;
              console.log($(element).data('slot'));
              const getDate = new Date(document.querySelector("#pick-date").value).getTime();
              const slotTime = $(element).data('slot');
              const freelancerSkillId = {{ $freelancerSkillId }}
              console.log(getDate);

              window.location = `/client?freelancerSkillId=${freelancerSkillId}&bookingDate=${getDate}&slotTime=${slotTime}`;
            });

            

        });
    </script>
</body>

</html>
