<x-app-layout>
    <br><br>
    <div class="container">
        <h2 class="text-4xl text-center text-purple-900 font-mono"> IMPRESION 3D</h2>
        <br>
    </div>
    <div class="w-full max-w-6xl mx-auto rounded-xl bg-white shadow-lg p-5 text-black">

        <form action="{{ route('macetas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1  items-center">
                <div class=" rounded-tl-lg bg-white md:w-auto">
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="name">Nombre: </label>
                        <input type="text" placeholder="Nombre"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">Descripción: </label>
                        <input type="text" placeholder="Descripción"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            placeholder="" name="description" value="{{ old('description') }}">
                        @error('description')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">Color: </label>
                        <input type="text" placeholder="Color"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            placeholder="" name="color" value="{{ old('color') }}">
                        @error('color')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">Cantidad: </label>
                        <input type="number" min="1" max="100" placeholder="Cantidad"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            placeholder="" name="quantity" value="{{ old('quantity') }}">
                        @error('quantity')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">Material: </label>
                        <input type="text" placeholder="Material"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            placeholder="" name="material" value="{{ old('material') }}">
                        @error('material')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="grid grid-cols-1 space-y-2">
                        {{-- <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">FIle: </label>
                        <input type="text" placeholder="File"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            placeholder="" name="file" value="{{ old('file') }}"> --}}
                        <p>Modelo 3D: (stl,obj,fbx,skp,gltf,glb,usd)</p>
                        <div class="flex items-center justify-center w-full">
                            <label
                                class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
                                <div
                                    class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
                                    <!---<svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                            </svg>-->
                                    <div class="flex flex-auto max-h-48 w-2/5 mx-auto ">
                                        <img src="{{ asset('image/upload-file.png') }}" alt="upload" title="Upload "
                                            class="loaded" width="256" height="256">
                                    </div>
                                </div>
                                <input type="file" class="hidden" name="file">
                            </label>
                        </div>
                        @error('file')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="grid grid-cols-1 space-y-2">
                        <label class="text-sm font-bold text-gray-500 tracking-wide" for="#">Comentario: </label>
                        <textarea name="comment"
                            class="ml-6 mr-6 text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 shadow-lg"
                            id="" cols="30" rows="10">
                        </textarea>
                        {{-- <input type="text" placeholder="Color"
                            class=""
                            placeholder="" name="color" value="{{ old('color') }}"> --}}
                        @error('comment')
                            <div class="flex bg-yellow-100 rounded-lg p-4 mb-4 text-sm text-yellow-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium"><small> {{ $message }}</small></span>
                                </div>
                            </div>
                        @enderror
                    </div>
                    <br><br>
                    <div class="grid lg:grid-cols-7 sm:grid-cols-2">
                        <div class="lg:col-start-4 lg:col-end-5">
                            <button
                                class="shadow-2xl inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-500 rounded-full shadow ripple hover:shadow-lg hover:bg-indigo-600 focus:outline-none">
                                Guardar
                            </button>
                        </div>
                    </div>
                    <br><br>
                    {{-- <label class="mb-2 font-bold text-lg text-gray-900" for="File">File</label>
            <input class="border py-2 px-3 text-grey-800" type="file" name="file" id="file"> <br><br> --}}
                    <hr>
                </div>
            </div>
        </form>
        <br>
        <div class="container gap-4  grid md:grid-cols-2 sm:grid-cols-1 items-center ">
            <div class="border-gray-400 px-4 py-2 bg-gray-200">
                @if (empty($query))
                    <h1>No Hay datos</h1>
                @else
                    |Nombre con MD5 |
                    <p>
                        Calcula el hash MD5 de str utilizando el » Algoritmo MD5 Message-Digest de RSA Data Security,
                        Inc. y devuelve ese hash. <br>
                        <a href="https://www.php.net/manual/es/function.md5.php"
                            class="text-blue-400 underline">Documentacíon</a>
                    </p>
                    <ol class="list-decimal list-inside">
                        @foreach ($query as $query)
                            <li> {{ $query->name }}</li>
                        @endforeach
                    </ol>
                @endif
            </div>
            <div class="border-gray-400 px-4 py-2 bg-gray-200">
                @if (empty($query2))
                    <h1>No Hay datos</h1>
                @else
                    |Descripción con SHA1 |
                    <p>Calcula el hash sha1 de str utilizando el » Algoritmo 1 US Secure Hash Algorithm 1. <br>
                        <a href="https://www.php.net/manual/es/function.sha1.php"
                            class="text-blue-400 underline">Documentación</a>
                        <br>
                    </p>
                    <ol class="list-decimal list-inside">
                        @foreach ($query2 as $query2)
                            <li> {{ $query2->description }}</li>
                        @endforeach
                    </ol>
                @endif
            </div>
            <div class="border-gray-400 px-4 py-2 bg-gray-200">
                @if (empty($query3))
                    <h1>No Hay datos</h1>
                @else
                    |File con Hash |
                    hash — Generar un valor hash (resumen de mensaje) <br>
                    <p>
                        <a class="text-blue-400 underline"
                            href="https://www.php.net/manual/es/function.hash.php">Documentación</a> <br>
                        hash('tiger192,3',$dato)
                    </p>
                    <ol class="list-decimal list-inside">
                        @foreach ($query3 as $query3)
                            <li> {{ $query3->comment }}</li>
                        @endforeach
                    </ol>
                @endif
            </div>
        </div>
        <br><br>
    </div>
    <br><br>

</x-app-layout>
