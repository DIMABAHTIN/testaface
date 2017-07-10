<div>
    <select name="country_id" value="">
        <?php
        foreach ($dataSearch as $data) {
            echo '<option value="'. $data['country_id'] .'">'. $data['county_name'] .'</option>';
        }
        ?>
    </select>
</div>
