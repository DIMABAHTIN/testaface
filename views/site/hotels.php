<div>
    <select name="country_id">
        <option>Выберите из списка</option>
        <?php
        if(!empty($model)) {
            foreach ($model as $data) {
                echo '<option value="' . $data['country_id'] . '">' . $data['county_name'] . '</option>';
            }
        }
        ?>
    </select>
</div>
