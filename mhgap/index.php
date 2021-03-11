<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mental Wellness Support Pathway (MWSP)</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</head>
<body>

<div class="container" style="padding: 30px;">
    <h2>Mental Wellness Support Pathway (MWSP)</h2>
    <h3 style="margin-bottom: 30px;">Based on mhGAP Intervention Guide<br />
    Depression Assessment</h3>
    <div class="row">
        <div class="col-md">
<?php
require 'Basic.php'; // BasicPHP

function dep_unlike() {
    ?>
    <strong>Depression is unlikely</strong><br />
    » Go to <strong>» OTH</strong>
    <?php
}

function protocol_1() {
    ?>
    <strong>Protocol 1 - Depression</strong><br/>
    <br />
    » Provide psychoeducation to the person and their
    carers. (2.1)<br />
    » Reduce stress and strengthen social supports. (2.2)<br />
    » Promote functioning in daily activities and
    community life. (2.3)<br />
    » Consider antidepressants. (2.5)<br />
    » If available, consider referral for one of the
    following brief psychological treatments:
    interpersonal therapy (IPT), cognitive behavioural
    therapy (CBT), behaviour activation and problem-
    solving counselling. (2.4)<br />
    » DO NOT manage the symptoms with ineffective
    treatments, e.g. vitamin injections.<br />
    » Offer regular follow-up.<br />
    <?php
}

function protocol_2() {
    ?>
    <strong>Protocol 2 - Depression in Bipolar Disorder</strong><br/>
    <br />
    » Consult a specialist.<br />
    » If a specialist is not immediately available,
    follow treatment for depression (PROTOCOL 1).
    However, NEVER prescribe antidepressants
    alone without a mood stabilizer such as lithium,
    carbamazepine or valproate because anti-
    depressants can lead to mania in people with
    bipolar disorder (Go to PSY).<br />
    » If symptoms of mania develop, tell the person
    and the carers to stop the antidepressant
    immediately and return for help.<br />
    <?php
}

$root_1 = 'R1'; // Main root
$root_node = $root_1; // Set root node
$root_2 = 'R2'; // Second root
$root_3 = 'R3'; // Third root

// Start again
if (isset($_POST['start-again'])){
    $root_node = $root_1;
} else {
    // Default or proceed to Root 2
    if (! isset($_POST['goto-R3']) && (isset($_POST['goto-R2']) || (isset($_COOKIE['root']) && $_COOKIE['root'] == $root_2) )) {
        $root_node = $root_2;
        require_once 'root2.php';
    }

    // Default or proceed to Root 3
    if (isset($_POST['goto-R3']) || (isset($_COOKIE['root']) && $_COOKIE['root'] == $root_3) ) {
        $root_node = $root_3;
        require_once 'root3.php';
    }
}

if (isset($_POST['name'])) setcookie('name', $_POST['name']);

?>
<?php if ($root_node == $root_1) : ?>
    <?php if (! isset($_POST['submit'])) : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>Informed Consent</strong>
                            <br />
                            <br />
                            I consent to participate in the Mental Wellness Support Pathway (MWSP) program, and I am aware that my participation is entirely voluntary.<br />
                            <br />
                            I understand that I may withdraw at any time without giving a reason, and without this affecting my academic status or future endeavors with the school.<br />
                            <br />
                            By clicking “Yes” to this consent, I agree that my personal data may be used for the purpose of mental wellness assessment, evaluation, and/or interventions by school and health authorities.<br />
                        </label>
			<label>Name:</label>
			<input type="text" class="form-control" name="name" required/>
			<br />
                        <select class="form-control" id="0" name="consent" required>
                            <option disabled selected></option>
                            <option value="1">Yes, I consent to the above conditions.</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST["consent"]) && $_POST["consent"] == "1") : ?>
                        <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>COMMON PRESENTATIONS OF DEPRESSION</strong>
                            <br />
                            <br />
                            <ul>
                                <li><em>Multiple persistent physical symptoms with no clear cause</em></li>
                                <li><em>Low energy, fatigue, sleep problems</em></li>
                                <li><em>Persistent sadness or depressed mood, anxiety</em></li>
                                <li><em>Loss of interest or pleasure in activities that are normally pleasurable</em></li>
                            </ul>
                            <strong>Does the person have depression?<br />
                            Has the person had at least one of the following core symptoms of depression for at least 2 weeks?</strong><br />
                            <br />
                            – Persistent depressed mood<br />
                            – Markedly diminished interest in or pleasure from activities
                        </label>
                        <select class="form-control" id="<?= $root_node ?>" name="<?= $root_node ?>" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node]) && $_POST[$root_node] == "1") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label><strong>Has the person had several of the following additional symptoms for at least 2 weeks:</strong><br />
                        <br />
                        – Disturbed sleep or sleeping too much<br />
                        – Significant change in appetite or weight (decrease or increase)<br />
                        – Beliefs of worthlessness or excessive guilt<br />
                        – Fatigue or loss of energy<br />
                        – Reduced concentration<br />
                        – Indecisiveness<br />
                        – Observable agitation or physical restlessness<br />
                        – Talking or moving more slowly than usual<br />
                        – Hopelessness<br />
                        – Suicidal thoughts or acts</label>
                        <select class="form-control" id="<?= $root_node ?>-1" name="<?= $root_node ?>-1" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node]) && $_POST[$root_node] == "2") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <?php dep_unlike(); ?>
    <?php elseif (isset($_POST[$root_node . '-1']) && $_POST[$root_node . '-1'] == "1") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label><strong>Does the person have considerable difficulty with daily functioning in personal, family, social, educational, occupational or other areas?</strong><br />
                    </label>
                    <select class="form-control" id="<?= $root_node ?>-1-1" name="<?= $root_node ?>-1-1" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-1']) && $_POST[$root_node . '-1'] == "2") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <?php dep_unlike(); ?>
    <?php elseif (isset($_POST[$root_node . '-2']) && $_POST[$root_node . '-2'] == "1") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>Your previous answer is Yes.<br />
                    What is your answer to Question 3?</label>
                    <select class="form-control" id="<?= $root_node ?>-2-1" name="<?= $root_node ?>-2-1" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2']) && $_POST[$root_node . '-2'] == "2") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>Your previous answer is No.<br />
                    What is your answer to Question 3?</label>
                    <select class="form-control" id="<?= $root_node ?>-2-2" name="<?= $root_node ?>-2-2" required>
                        <option disabled selected></option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-1-1']) && $_POST[$root_node . '-1-1'] == "1") : ?>
		<?php // Insert alert API to healthcare provider here. ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label><strong>Consider DEPRESSION</strong><br />
                    <br /></label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="goto-<?= $root_2; ?>">Proceed to Step 2</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-1-1']) && $_POST[$root_node . '-1-1'] == "2") : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                <?php dep_unlike(); ?>
    <?php else : ?>
                <script>document.cookie = 'root=<?= $root_1 ?>';</script>
                Sorry. No leaf node for this particular branch node.
    <?php endif ?>
<?php endif; ?>
        </div>
        <div class="col-md"></div>
    </div>
</div>

</body>
</html>
