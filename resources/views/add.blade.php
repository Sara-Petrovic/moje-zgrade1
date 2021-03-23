<x-app-layout>
    <x-slot name="header">
        <h2 class="font semibold text-xl text-gray-800 leading-tight">
            {{__('Unesi novu zgradu')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <form action="/zgrada" method="POST">
                    <div class="form-group">
                        <input name="adresa" style="margin-bottom: 10px;" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-15 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Unesi adresu zgrade'></input>  
                        @if ($errors->has('adresa'))
                            <span class="text-danger">{{ $errors->first('adresa') }}</span>
                        @endif
                        <input name="tekuci_racun" style="margin-bottom: 10px;" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-15 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Unesi tekuci racun'></input>  
                        @if ($errors->has('tekuci_racun'))
                            <span class="text-danger">{{ $errors->first('tekuci_racun') }}</span>
                        @endif
                        <input name="banka" style="margin-bottom: 10px;" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-15 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Unesi banku'></input>  
                        @if ($errors->has('banka'))
                            <span class="text-danger">{{ $errors->first('banka') }}</span>
                        @endif
                        <input type ="number" name="broj_stanova" style="margin-bottom: 10px;" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-15 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"  placeholder='Unesi broj stanova'></input>  
                        @if ($errors->has('broj_stanova'))
                            <span class="text-danger">{{ $errors->first('broj_stanova') }}</span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Dodaj zgradu</button>
                    </div>
                    {{ csrf_field() }}
                </form>
            </div>    
        
        </div>
    
    </div>

</x-app-layout>