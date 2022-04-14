<div>
    <label for="name" class="base-input-label">@lang('Docs')</label>
</div>
<div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <strong>Attachement</strong>
            <div id="" class="input-group">
                {{-- <input type="checkbox" name="attachments[]" value="1"
                {{ !in_array('1', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('1', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <div id="" class="input-group">
                <strong>Bon de Livraison</strong>
                {{-- <input type="checkbox" name="attachments[]" value="2"
                {{ !in_array('2', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('2', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <div id="" class="input-group">
                <strong>Ordre de Travail</strong>
                {{-- <input type="checkbox" name="attachments[]" value="3"
                {{ !in_array('3', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('3', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <div id="" class="input-group">
                <strong>Bon de commande</strong>
                {{-- <input type="checkbox" name="attachments[]" value="4"
                {{ !in_array('4', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('4', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <div id="" class="input-group">
                <strong> Fiche de controle</strong>
                {{-- <input type="checkbox" name="attachments[]" value="5"
                {{ !in_array('5', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('5', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
    <div class="checkbox">
        <label style="margin-left: -20px;">
            <div id="" class="input-group">
                <strong> Fiche de pointage</strong>
                {{-- <input type="checkbox" name="attachments[]" value="6"
                {{ !in_array('6', $attachments) ? 'disabled' : 'required' }}> --}}
                <input type="file" name="attachments_files[]" id="" onchange="loadPreview(this);"
                    {{ !in_array('6', $attachments) ? 'disabled' : 'required' }}>
                <span style="font-size:10px">Recommended files (PDF)</span>
            </div>
        </label>
    </div>
</div>
