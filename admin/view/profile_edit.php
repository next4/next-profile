<h2 class="nx_profile_title">Next profile extra</h2>
<div class="nx_profile_content">

    <div class="nx_profile_box_field">
        <div class="nx_profile_item np_text w1">
            Add ruler profile
        </div>
        <div class="nx_profile_item w9">
            <select name="extra_profile" id="extra_profile">
                <option value="">Selecionar extra profile</option>
                <?php foreach ($data['get_list_profile'] as $k => $profile): ?>
                <option value="<?=$k?>" <?=($k ==$data['profile_saved'])?'selected':''?> ><?=$profile?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>

</div>

