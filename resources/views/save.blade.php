@extends('layouts.app')
@section('page')
<section class="bg-white p-5 m-5 rounded ">
      <h3 class="text-2xl mb-5">
      Nama: {{$name}}
      <p>
      Kelas: {{$class}}
      </p>
      </h3>
        <div class="w-full lg:w-2/5 center mx-auto mb-5">
          <div class="p-2 rounded text-center bg-teal-500 text-white">
            Hasil Nilai
          </div>
          <div class="flex gap-5 mt-2 ">
            <div
              class="flex-grow border border-gray-300 rounded text-center py-8 "
            >
              <h2 class="text-4xl font-bold pb-2">{{$average}}</h2>
              <h4 class="inline text-gray-500 text-sm">Rata-Rata</h4>
            </div>
            <div
              class="flex-grow border border-gray-300 rounded text-center py-8"
            >
              <h2 class="text-4xl font-bold pb-2">{{$nilai}}</h2>
              <h4 class="inline text-gray-500 text-sm">Nilai</h4>
            </div>
          </div>
        </div>
      
      <div class="w-full lg:w-5/5">
          <div class="p-2 rounded text-center bg-teal-500 text-white ">
            Hasil Nilai Rata-Rata
          </div>
          <div class="flex gap-5 mt-2">
            <div
              class="flex-grow border border-gray-300 rounded text-center py-8"
            >
              <h2 class="text-4xl font-bold pb-2">{{$averageMtk}}</h2>
              <h4 class="inline text-gray-500 text-sm">Matematika</h4>
            </div>
            <div
              class="flex-grow border border-gray-300 rounded text-center py-8"
            >
              <h2 class="text-4xl font-bold pb-2">{{$averageFisika}}</h2>
              <h4 class="inline text-gray-500 text-sm">Fisika</h4>
            </div>
            <div
              class="flex-grow border border-gray-300 rounded text-center py-8"
            >
              <h2 class="text-4xl font-bold pb-2">{{$averageKimia}}</h2>
              <h4 class="inline text-gray-500 text-sm">Kimia</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
@endSection