<div>
    <label>Brand / ยี่ห้อ</label>
    <input  name="brand" type="text"
            value="{{ isset($vehicle->brand) ? $vehicle->brand : '' }}"
            />
</div>
<div>
    <label>Series / รุ่น</label>
    <input   name="series" type="text"
             value="{{ isset($vehicle->series) ? $vehicle->series : '' }}"
             />
</div>
<div>
    <label>Colour / สี</label>
    <input  name="colour" type="text"
            value="{{ isset($vehicle->colour) ? $vehicle->colour : '' }}"
            />
</div>
<div >
    <label>Year / ปี</label>
    <input name="year" type="number"
           value="{{ isset($vehicle->year) ? $vehicle->year : '' }}"
           />
</div>
<div>
    <label>Mileage / เลขไมล์</label>
    <input  name="mileage" type="number"
            value="{{ isset($vehicle->mileage) ? $vehicle->mileage : '' }}"
            />
</div>
