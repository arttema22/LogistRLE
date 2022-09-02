<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DirTypeTrucks;
use App\Models\DirOwnerTrucks;
use App\Models\DirPlaceWork;
use App\Models\DirCargo;
use App\Models\DirAddress;
use App\Models\DirPetrolStations;
use App\Models\DistanceBilling;
use App\Models\DirPayers;
use App\Models\DirServices;

class DirectoryController extends Controller {

    public function type_trucks() {
        $TypeTrucks = new DirTypeTrucks();
        return view('directory.type-trucks', ['TypeTrucks' => $TypeTrucks->all()]);
    }

    public function type_trucks_new() {
        return view('directory.type-trucks-new');
    }

    public function type_trucks_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_type_trucks,title', 'is-service' => 'boolean']);
        $TypeTrucks = new DirTypeTrucks();
        $TypeTrucks->title = $request->input('title');
        $TypeTrucks->is_service = ($request->has('is-service')) ? 1 : 0;
        $TypeTrucks->save();
        $DistanceBilling = new DistanceBilling();
        $DistanceBilling->type_truck_id = $TypeTrucks->id;
        $DistanceBilling->save();
        return redirect()->route('directory.type-trucks')->with('success', 'Создан новый тип. Не забудьте заполнить тарифы к новому типу.');
    }

    public function type_trucks_update($id) {
        $TypeTrucks = new DirTypeTrucks();
        return view('directory.type-trucks-update', ['TypeTrucks' => $TypeTrucks->find($id)]);
    }

    public function type_trucks_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required', 'is-service' => 'boolean']);
        $TypeTrucks = DirTypeTrucks::find($id);
        $TypeTrucks->title = $request->input('title');
        $TypeTrucks->is_service = ($request->has('is-service')) ? 1 : 0;
        $TypeTrucks->save();
        return redirect()->route('directory.type-trucks')->with('success', 'Запись была изменена');
    }

    public function type_trucks_delete($id) {
        $TypeTrucks = DirTypeTrucks::find($id);
        $TypeTrucks->status = 0;
        $TypeTrucks->save();
        $DistanceBilling = DistanceBilling::find($TypeTrucks->distanceBilling->id);
        $DistanceBilling->status = 0;
        $DistanceBilling->save();
        return redirect()->route('directory.type-trucks')->with('warning', 'Запись была удалена');
    }

    public function type_trucks_recover($id) {
        $TypeTrucks = DirTypeTrucks::find($id);
        $TypeTrucks->status = 1;
        $TypeTrucks->save();
        $DistanceBilling = DistanceBilling::find($TypeTrucks->distanceBilling->id);
        $DistanceBilling->status = 1;
        $DistanceBilling->save();
        return redirect()->route('directory.type-trucks')->with('success', 'Запись была восстановлена');
    }

    public function owner_trucks() {
        $OwnerTrucks = new DirOwnerTrucks();
        return view('directory.owner-trucks', ['OwnerTrucks' => $OwnerTrucks->all()]);
    }

    public function owner_trucks_new() {
        return view('directory.owner-trucks-new');
    }

    public function owner_trucks_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_owner_trucks,title']);
        $OwnerTrucks = new DirOwnerTrucks();
        $OwnerTrucks->title = $request->input('title');
        $OwnerTrucks->save();
        return redirect()->route('directory.owner-trucks')->with('success', 'Создана новая запись');
    }

    public function owner_trucks_update($id) {
        $OwnerTrucks = new DirOwnerTrucks();
        return view('directory.owner-trucks-update', ['OwnerTrucks' => $OwnerTrucks->find($id)]);
    }

    public function owner_trucks_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_owner_trucks,title']);
        $OwnerTrucks = DirOwnerTrucks::find($id);
        $OwnerTrucks->title = $request->input('title');
        $OwnerTrucks->save();
        return redirect()->route('directory.owner-trucks')->with('success', 'Запись была изменена');
    }

    public function owner_trucks_delete($id) {
        $OwnerTrucks = DirOwnerTrucks::find($id);
        $OwnerTrucks->status = 0;
        $OwnerTrucks->save();
        return redirect()->route('directory.owner-trucks')->with('warning', 'Запись была удалена');
    }

    public function owner_trucks_recover($id) {
        $OwnerTrucks = DirOwnerTrucks::find($id);
        $OwnerTrucks->status = 1;
        $OwnerTrucks->save();
        return redirect()->route('directory.owner-trucks')->with('success', 'Запись была восстановлена');
    }

    public function place_work() {
        $PlaceWorks = new DirPlaceWork();
        return view('directory.place-work', ['PlaceWorks' => $PlaceWorks->all()]);
    }

    public function place_work_new() {
        return view('directory.place-work-new');
    }

    public function place_work_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_place_works,title']);
        $PlaceWork = new DirPlaceWork();
        $PlaceWork->title = $request->input('title');
        $PlaceWork->save();
        return redirect()->route('directory.place-work')->with('success', 'Создана новая запись');
    }

    public function place_work_update($id) {
        $PlaceWork = new DirPlaceWork();
        return view('directory.place-work-update', ['PlaceWork' => $PlaceWork->find($id)]);
    }

    public function place_work_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_place_works,title']);
        $PlaceWork = DirPlaceWork::find($id);
        $PlaceWork->title = $request->input('title');
        $PlaceWork->save();
        return redirect()->route('directory.place-work')->with('success', 'Запись была изменена');
    }

    public function place_work_delete($id) {
        $PlaceWork = DirPlaceWork::find($id);
        $PlaceWork->status = 0;
        $PlaceWork->save();
        return redirect()->route('directory.place-work')->with('warning', 'Запись была удалена');
    }

    public function place_work_recover($id) {
        $PlaceWork = DirPlaceWork::find($id);
        $PlaceWork->status = 1;
        $PlaceWork->save();
        return redirect()->route('directory.place-work')->with('success', 'Запись была восстановлена');
    }

    public function cargo() {
        $Cargos = new DirCargo();
        return view('directory.cargo', ['Cargos' => $Cargos->all()]);
    }

    public function cargo_new() {
        return view('directory.cargo-new');
    }

    public function cargo_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_cargos,title']);
        $Cargo = new DirCargo();
        $Cargo->title = $request->input('title');
        $Cargo->save();
        return redirect()->route('directory.cargo')->with('success', 'Создана новая запись');
    }

    public function cargo_update($id) {
        $Cargo = new DirCargo();
        return view('directory.cargo-update', ['Cargo' => $Cargo->find($id)]);
    }

    public function cargo_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_cargos,title']);
        $Cargo = DirCargo::find($id);
        $Cargo->title = $request->input('title');
        $Cargo->save();
        return redirect()->route('directory.cargo')->with('success', 'Запись была изменена');
    }

    public function cargo_delete($id) {
        $Cargo = DirCargo::find($id);
        $Cargo->status = 0;
        $Cargo->save();
        return redirect()->route('directory.cargo')->with('warning', 'Запись была удалена');
    }

    public function cargo_recover($id) {
        $Cargo = DirCargo::find($id);
        $Cargo->status = 1;
        $Cargo->save();
        return redirect()->route('directory.cargo')->with('success', 'Запись была восстановлена');
    }

    public function address() {
        $Addreses = new DirAddress();
        return view('directory.address', ['Addreses' => $Addreses->all()]);
    }

    public function address_new() {
        return view('directory.address-new');
    }

    public function address_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_addresses,title', 'address' => 'required|unique:dir_addresses,address', 'loading_point' => 'boolean', 'unloading_point' => 'boolean']);
        $Address = new DirAddress();
        $Address->title = $request->input('title');
        $Address->address = $request->input('address');
        // Получение координат от Яндекса
        //$ya_address = $request->input('address');
        //$ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=fffea709-a62e-4c4b-a76c-87bcae315a45&format=json&geocode=' . urlencode($ya_address));
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_HEADER, false);
        //$res = curl_exec($ch);
        //curl_close($ch);
        //$res = json_decode($res, true);
        //$coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
        //$coordinates = explode(' ', $coordinates);
        $Address->coordinates = 0;
        $Address->loading_point = ($request->has('loading-point')) ? 1 : 0;
        $Address->unloading_point = ($request->has('unloading-point')) ? 1 : 0;
        $Address->save();
        return redirect()->route('directory.address')->with('success', 'Создана новая запись');
    }

    public function address_update($id) {
        $Address = new DirAddress();
        return view('directory.address-update', ['Address' => $Address->find($id)]);
    }

    public function address_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required', 'address' => 'required', 'loading_point' => 'boolean', 'unloading_point' => 'boolean']);
        $Address = DirAddress::find($id);
        $Address->title = $request->input('title');
        $Address->address = $request->input('address');
        $Address->coordinates = 0;
        $Address->loading_point = ($request->has('loading-point')) ? 1 : 0;
        $Address->unloading_point = ($request->has('unloading-point')) ? 1 : 0;
        $Address->save();
        return redirect()->route('directory.address')->with('success', 'Запись была изменена');
    }

    public function address_delete($id) {
        $Address = DirAddress::find($id);
        $Address->status = 0;
        $Address->save();
        return redirect()->route('directory.address')->with('warning', 'Запись была удалена');
    }

    public function address_recover($id) {
        $Address = DirAddress::find($id);
        $Address->status = 1;
        $Address->save();
        return redirect()->route('directory.address')->with('success', 'Запись была восстановлена');
    }

    public function petrol_stations() {
        $PetStations = new DirPetrolStations();
        return view('directory.petrol-stations', ['PetStations' => $PetStations->all()]);
    }

    public function petrol_stations_new() {
        return view('directory.petrol-stations-new');
    }

    public function petrol_stations_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_petrol_stations,title']);
        $PetStations = new DirPetrolStations();
        $PetStations->title = $request->input('title');
        $PetStations->save();
        return redirect()->route('directory.petrol-stations')->with('success', 'Создана новая запись');
    }

    public function petrol_stations_update($id) {
        $PetStations = new DirPetrolStations();
        return view('directory.petrol-stations-update', ['PetStations' => $PetStations->find($id)]);
    }

    public function petrol_stations_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_petrol_stations,title']);
        $PetStations = DirPetrolStations::find($id);
        $PetStations->title = $request->input('title');
        $PetStations->save();
        return redirect()->route('directory.petrol-stations')->with('success', 'Запись была изменена');
    }

    public function petrol_stations_delete($id) {
        $PetStations = DirPetrolStations::find($id);
        $PetStations->status = 0;
        $PetStations->save();
        return redirect()->route('directory.petrol-stations')->with('warning', 'Запись была удалена');
    }

    public function petrol_stations_recover($id) {
        $PetStations = DirPetrolStations::find($id);
        $PetStations->status = 1;
        $PetStations->save();
        return redirect()->route('directory.petrol-stations')->with('success', 'Запись была восстановлена');
    }

    public function payers() {
        $Payers = new DirPayers();
        return view('directory.payers', ['Payers' => $Payers->all()]);
    }

    public function payers_new() {
        return view('directory.payers-new');
    }

    public function payers_new_save(Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_payers,title']);
        $Payers = new DirPayers();
        $Payers->title = $request->input('title');
        $Payers->save();
        return redirect()->route('directory.payers')->with('success', 'Создана новая запись');
    }

    public function payers_update($id) {
        $Payers = new DirPayers();
        return view('directory.payers-update', ['Payers' => $Payers->find($id)]);
    }

    public function payers_update_save($id, Request $request) {
        $valid = $request->validate(['title' => 'required|unique:dir_payers,title']);
        $Payers = DirPayers::find($id);
        $Payers->title = $request->input('title');
        $Payers->save();
        return redirect()->route('directory.payers')->with('success', 'Запись была изменена');
    }

    public function payers_delete($id) {
        $Payers = DirPayers::find($id);
        $Payers->status = 0;
        $Payers->save();
        return redirect()->route('directory.payers')->with('warning', 'Запись была удалена');
    }

    public function payers_recover($id) {
        $Payers = DirPayers::find($id);
        $Payers->status = 1;
        $Payers->save();
        return redirect()->route('directory.payers')->with('success', 'Запись была восстановлена');
    }

    public function services() {
        $Services = new DirServices();
        return view('directory.services', ['Services' => $Services->all()]);
    }

    public function services_new() {
        return view('directory.services-new');
    }

    public function services_new_save(Request $request) {
        $valid = $request->validate([
            'title' => 'required|unique:dir_services,title',
            'price' => 'required|numeric|min:0|not_in:0'
        ]);
        $Services = new DirServices();
        $Services->title = $request->input('title');
        $Services->price = $request->input('price');
        $Services->save();
        return redirect()->route('directory.services')->with('success', 'Создана новая услуга');
    }

    public function services_update($id) {
        $Services = new DirServices();
        return view('directory.services-update', ['Services' => $Services->find($id)]);
    }

    public function services_update_save($id, Request $request) {
        $valid = $request->validate([
            'title' => 'required|unique:dir_services,title',
            'price' => 'required|numeric|min:0|not_in:0'
        ]);
        $Services = DirServices::find($id);
        $Services->title = $request->input('title');
        $Services->price = $request->input('price');
        $Services->save();
        return redirect()->route('directory.services')->with('success', 'Запись была изменена');
    }

    public function services_delete($id) {
        $Services = DirServices::find($id);
        $Services->status = 0;
        $Services->save();
        return redirect()->route('directory.services')->with('warning', 'Запись была удалена');
    }

    public function services_recover($id) {
        $Services = DirServices::find($id);
        $Services->status = 1;
        $Services->save();
        return redirect()->route('directory.services')->with('success', 'Запись была восстановлена');
    }

}
