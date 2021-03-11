<?php if ($root_node == $root_3) : ?>
    <?php if (! isset($_POST['submit'])) : ?>
                <script>document.cookie = 'root=<?= $root_3 ?>';</script>
                <form method="post">
                    <div class="form-group">
                    <label>
                        <strong>» Assess for concurrent MNS conditions according to the
                        mhGAP-IG master chart. Go to » MC.</strong><br />
                        <br />
                        <em>People with depression are at higher risk for most other priority MNS conditions.
                        Assess for disorders due to substance use.</em><br />
                        <br />
                        <?php protocol_1(); ?>
                    </label>
                    </div>
                </form>  
                <form method="post">
                    <button type="submit" class="btn btn-info" name="start-again">Start Again</button>
                </form>        
    <?php else : ?>
                Sorry. No leaf node for this particular branch node.
    <?php endif ?>
<?php endif ?>
