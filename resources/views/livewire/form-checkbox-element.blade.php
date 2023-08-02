<div>
    <label>
        <input wire:model="print" name="print" type="checkbox" value="1" {{  old('print') == 1 ? 'checked' : '0' }}>
        Ativar Categoria
    </label>
    <br>
    <label>
        <input wire:model="main" name="main"  type="checkbox" value="1" {{  old('print') == 1 ? 'checked' : '0' }} >
        Mostrar na Home
    </label>

</div>
