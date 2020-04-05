<div class="mb-4">
    <form wire:submit.prevent="addPost">
        <div class="form-group">
            <lable for="body" class="str-only">Your Post</lable>

            <textarea name="body" class="form-control" id="body" wire:model="body"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create new</button>
    </form>
</div>
