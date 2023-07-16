<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="feedback.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <h2>FEED BACK FORM</h2>
    <div class="container">
        <form>
            <div class="row">
                <div class="col-25">
                    <i class="fa fa user icon"></i>
                    <label for="fname">First Name</label>
                </div>
                <div class="input group">
                    <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                    </span>
                    <div class="col-75">
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="input group">
                        <span class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </span>
                        <div class="col-75">
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Mail Id</label>
                        </div>
                        <div class="form group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <div class="col-75">
                                <input id="txtEmailId" type="text" maxlength="50" placeholder="Enter Email Id">
                            </div>
                            <small id="txtEmailIdValidate" class="text-danger"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="feed_back">Feed Back</label>
                    </div>
                    <div class="col-75">
                        <textarea id="subject" name="subject" placeholder="Write something.."
                            style="height:200px"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-75">
                        <link rel="stylesheet" href="feedbackstar.html">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
        </form>
    </div>

</body>

</html>