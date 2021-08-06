<form wire:submit.prevent="submit">
    <div class="form-group col-span-6 sm:col-span-3">
        <label for="comment" ...>Comment</label>
        <input type="text" wire:model="comment" id="comment" ...>
        @error('comment') <span class="error">{{ $message }}</span> @enderror

    </div>
    <div class="col-span-6 sm:col-span-3 mt-8 mb-6">
    <button class="btn btn-primary" type="submit">Save registry</button>
    </div>
</form>