<?php if ($root_node == $root_2) : ?>
    <?php if (! isset($_POST['submit'])) : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>Are there other possible explanations for the symptoms?</strong>
                            <br />
                            <br />
                            <strong>IS THIS A PHYSICAL CONDITION THAT CAN RESEMBLE OR EXACERBATE DEPRESSION?</strong>
                            <br />
                            <br />
                            Are there signs and symptoms suggesting anaemia, malnutrition,
                            hypothyroidism, mood changes from substance use and medication side-effects
                            (e.g. mood changes from steroids)?
                        </label>
                        <select class="form-control" id="<?= $root_node ?>" name="<?= $root_node ?>" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
                <br />
                <form method="post">
                    <button type="submit" class="btn btn-info" name="start-again">Start Again</button>
                </form>
    <?php elseif (isset($_POST[$root_node]) && $_POST[$root_node] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>MANAGE THE PHYSICAL CONDITION</strong>
                            <br />
                            <br />
                            Do depressive symptoms remain after treatment?
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-1" name="<?= $root_node ?>-1" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node]) && $_POST[$root_node] == '2') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>IS THERE A HISTORY OF MANIA?</strong>
                            <br />
                            <br />
                            <strong>Have several of the following symptoms occurred simultaneously, lasting for at least 1 week, and severely
                            enough to interfere significantly with work and social activities or requiring hospitalization or confinement?</strong>
                            <br />
                            <br />
                            – Elevation of mood and/or irritability<br />
                            – Decreased need for sleep<br />
                            – Increased activity, feeling of increased energy, increased
                            talkativeness or rapid speech<br />
                            – Impulsive or reckless behaviours such as excessive spending, making
                            important decisions without planning and sexual indiscretion<br />
                            – Loss of normal social inhibitions resulting in inappropriate
                            behaviours<br />
                            – Being easily distracted<br />
                            – Unrealistically inflated self-esteem<br />
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-2" name="<?= $root_node ?>-2" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-1']) && $_POST[$root_node . '-1'] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>IS THERE A HISTORY OF MANIA?</strong>
                            <br />
                            <br />
                            <strong>Have several of the following symptoms occurred simultaneously, lasting for at least 1 week, and severely
                            enough to interfere significantly with work and social activities or requiring hospitalization or confinement?</strong>
                            <br />
                            <br />
                            – Elevation of mood and/or irritability<br />
                            – Decreased need for sleep<br />
                            – Increased activity, feeling of increased energy, increased
                            talkativeness or rapid speech<br />
                            – Impulsive or reckless behaviours such as excessive spending, making
                            important decisions without planning and sexual indiscretion<br />
                            – Loss of normal social inhibitions resulting in inappropriate
                            behaviours<br />
                            – Being easily distracted<br />
                            – Unrealistically inflated self-esteem<br />
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-2" name="<?= $root_node ?>-2" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-1']) && $_POST[$root_node . '-1'] == '2') : ?>
        <script>document.cookie = 'root=<?= $root_2 ?>';</script>
        <strong>No treatment needed.</strong>
    <?php elseif (isset($_POST[$root_node . '-2']) && $_POST[$root_node . '-2'] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>
                        <strong>DEPRESSIVE EPISODE IN BIPOLAR DISORDER is likely</strong><br />
                        <br />
                        <?php protocol_2(); ?>
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="goto-<?= $root_3; ?>">Proceed to Step 3</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2']) && $_POST[$root_node . '-2'] == '2') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>HAS THERE BEEN A MAJOR LOSS (E.G. BEREAVEMENT) WITHIN THE LAST 6 MONTHS?</strong>
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-2-2" name="<?= $root_node ?>-2-2" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2']) && $_POST[$root_node . '-2-2'] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>Are any of the following symptoms present?</strong><br />
                            <br />
                            – Suicidal ideation<br />
                            – Beliefs of worthlessness<br />
                            – Psychotic symptoms<br />
                            – Talking or moving more
                            slowly than normal<br />
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-2-2-1" name="<?= $root_node ?>-2-2-1" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2']) && $_POST[$root_node . '-2-2'] == '2') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>
                        <strong>DEPRESSIVE EPISODE IN BIPOLAR DISORDER is likely</strong><br />
                        <br />
                        <?php protocol_1(); ?>
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="goto-<?= $root_3; ?>">Proceed to Step 3</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2-1']) && $_POST[$root_node . '-2-2-1'] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>
                        <strong>DEPRESSION is likely</strong><br />
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="goto-<?= $root_3; ?>">Proceed to Step 3</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2-1']) && $_POST[$root_node . '-2-2-1'] == '2') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                        <label>
                            <strong>Does the person have a previous history of depression?</strong><br />
                        </label>
                        <select class="form-control" id="<?= $root_node ?>-2-2-1-2" name="<?= $root_node ?>-2-2-1-2" required>
                            <option disabled selected></option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2-1-2']) && $_POST[$root_node . '-2-2-1-2'] == '1') : ?>
                <script>document.cookie = 'root=<?= $root_2 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>
                        <strong>DEPRESSION is likely</strong><br />
                    </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="goto-<?= $root_3; ?>">Proceed to Step 3</button>
                </form>
    <?php elseif (isset($_POST[$root_node . '-2-2-1-2']) && $_POST[$root_node . '-2-2-1-2'] == '2') : ?> 
        <script>document.cookie = 'root=<?= $root_2 ?>';</script>
        <strong>Do not manage for depression.</strong>           
    <?php else : ?>
                Sorry. No leaf node for this particular branch node.
    <?php endif ?>
<?php endif ?>
