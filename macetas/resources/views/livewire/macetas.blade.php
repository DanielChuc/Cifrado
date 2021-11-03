<div class="container flex w-full justify-center " >
  <form action="">
    
      <div class=" rounded-tl-lg bg-white md:w-auto">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="#">Nombre: </label>
      <input type="text" placeholder="Nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      placeholder="" wire:model="name">

      <label class="block text-gray-700 text-sm font-bold mb-2" for="#">Descripción: </label>
      <input type="text" placeholder="Descripción" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      placeholder="" wire:model="description">
    
      <label class="block text-gray-700 text-sm font-bold mb-2" for="#">Color: </label>
      <input type="text" placeholder="Color" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      placeholder="" wire:model="color">


      <label class="block text-gray-700 text-sm font-bold mb-2" for="#">Cantidad: </label>
      <input type="number" min="1" max="100" placeholder="Cantidad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      placeholder="" wire:model="quantity">

      <label class="block text-gray-700 text-sm font-bold mb-2" for="#">Material: </label>
      <input type="text" placeholder="Material" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
      placeholder="" wire:model="material">

      <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
      <input class="border py-2 px-3 text-grey-800" type="file" wire:model="file" id="file"> <br><br>
      <hr>
    </div>
    <button class="p-2 pl-5 pr-5 bg-transparent border-2 border-indigo-500 text-indigo-500 text-lg rounded-lg transition-colors duration-700 transform hover:bg-indigo-500 hover:text-gray-100 focus:border-4 focus:border-indigo-300">Button</button>

  </form>
    <br>
        
  
</div>