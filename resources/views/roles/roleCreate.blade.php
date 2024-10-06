<x-app-layout>
    <div class="formsig">
        <form method="POST" action="{{ route('roles.store') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom du role</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description du role</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Enregistrer</button>
        </form>
    </div>
</x-app-layout>