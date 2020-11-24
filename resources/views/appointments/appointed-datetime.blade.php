<div>
    <div class="row mb-4">
        <div class="col mb-12 form-inline text-center">
            <!-- Datetime input -->
            <div class="form-group">
                <div class="row">
                    <div class="col-md-9 {{ $errors->first('appointed_to') ? 'form-group has-error' : ''}}">
                        <input type="datetime-local" id="appointed_to" name="appointed_to" class="form-control"
                            placeholder="" value="{{ !empty($appointment) ? Carbon\Carbon::parse($appointment->appointed_to)->format("Y-m-d\TH:i") : ''}}" size="10">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
