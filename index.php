<?php
$root_node = 'R'; // Set root node
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Decision Support System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="padding: 30px;">
    <h2 style="margin-bottom: 30px;">Decision Support System</h3>
    <div class="row">
        <div class="col-md">
<?php if (! isset($_POST['submit'])) : ?>
            <form method="post">
                <div class="form-group">
                    <label for="gender">What is your answer to Question 1?</label>
                    <select class="form-control" id="<?= $root_node ?>" name="<?= $root_node ?>" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node] == "1") : ?>
            <form method="post">
                <div class="form-group">
                    <label for="gender">Your previous answer is Yes.<br />
                    What is your answer to Question 2?</label>
                    <select class="form-control" id="<?= $root_node ?>-1" name="<?= $root_node ?>-1" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node] == "2") : ?>
            <form method="post">
                <div class="form-group">
                    <label for="gender">Your previous answer is No.<br />
                    What is your answer to Question 2?</label>
                    <select class="form-control" id="<?= $root_node ?>-2" name="<?= $root_node ?>-2" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node . '-1'] == "1") : ?>
            <form method="post">
                <div class="form-group">
                <label for="gender">Your previous answer is Yes.<br />
                What is your answer to Question 3?</label>
                <select class="form-control" id="<?= $root_node ?>-1-1" name="<?= $root_node ?>-1-1" required>
                    <option disabled selected></option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node . '-1'] == "2") : ?>
            <form method="post">
                <div class="form-group">
                <label for="gender">Your previous answer is No.<br />
                What is your answer to Question 3?</label>
                <select class="form-control" id="<?= $root_node ?>-1-2" name="<?= $root_node ?>-1-2" required>
                    <option disabled selected></option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node . '-2'] == "1") : ?>
            <form method="post">
                <div class="form-group">
                <label for="gender">Your previous answer is Yes.<br />
                What is your answer to Question 3?</label>
                <select class="form-control" id="<?= $root_node ?>-2-1" name="<?= $root_node ?>-2-1" required>
                    <option disabled selected></option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node . '-2'] == "2") : ?>
            <form method="post">
                <div class="form-group">
                <label for="gender">Your previous answer is No.<br />
                What is your answer to Question 3?</label>
                <select class="form-control" id="<?= $root_node ?>-2-2" name="<?= $root_node ?>-2-2" required>
                    <option disabled selected></option>
                    <option value="1">Yes</option>
                    <option value="2">No</option>
                </select>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
<?php elseif ($_POST[$root_node . '-1-1'] == "1") : ?>
            Your answer for Question 1 is Yes.<br />
            Your answer for Question 2 is Yes.<br />
            Your answer for Question 3 is Yes.
<?php elseif ($_POST[$root_node . '-1-1'] == "2") : ?>
            Your answer for Question 1 is Yes.<br />
            Your answer for Question 2 is Yes.<br />
            Your answer for Question 3 is No.
<?php elseif ($_POST[$root_node . '-1-2'] == "1") : ?>
            Your answer for Question 1 is Yes.<br />
            Your answer for Question 2 is No.<br />
            Your answer for Question 3 is Yes.
<?php elseif ($_POST[$root_node . '-1-2'] == "2") : ?>
            Your answer for Question 1 is Yes.<br />
            Your answer for Question 2 is No.<br />
            Your answer for Question 3 is No.
<?php elseif ($_POST[$root_node . '-2-1'] == "1") : ?>
            Your answer for Question 1 is No.<br />
            Your answer for Question 2 is Yes.<br />
            Your answer for Question 3 is Yes.
<?php elseif ($_POST[$root_node . '-2-1'] == "2") : ?>
            Your answer for Question 1 is No.<br />
            Your answer for Question 2 is Yes.<br />
            Your answer for Question 3 is No.
<?php elseif ($_POST[$root_node . '-2-2'] == "1") : ?>
            Your answer for Question 1 is No.<br />
            Your answer for Question 2 is No.<br />
            Your answer for Question 3 is Yes.
<?php // elseif ($_POST[$root_node . '-2-2'] == "2") : ?>
            <!-- Your answer for Question 1 is No.<br />
            Your answer for Question 2 is No.<br />
            Your answer for Question 3 is No. -->
<?php else : ?>
            Sorry. No leaf node for this particular branch node.
<?php endif ?>
        </div>
        <div class="col-md"></div>
    </div>
</div>

</body>
</html>