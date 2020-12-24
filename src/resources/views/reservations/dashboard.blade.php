@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約ダッシュボード</h1>

    <div class="m-4">
        <form>
        <div class="form-group row">
                <label class="col-2 col-form-label">検索開始日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">検索終了日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">容量</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">種別</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>すべて</option>
                        <option>レンタル</option>
                        <option>ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">対応OS</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>すべて</option>
                        <option>Windows</option>
                        <option>Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">関連案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>
    </div>



    <h2 class="text-center">2021年1月</h2>
    <button type="button" class="btn btn-light m-1">◀</button>
    <button type="button" class="btn btn-light m-1">▶</button>
    <button type="button" class="btn btn-light m-1">今月</button>

    <table class="table table-hover table-bordered">

    <tr>
        <th class="bg-secondary text-light"></th>
        <th class="text-danger">金</th>
        <th class="">土</th>
        <th class="text-danger">日</th>
        <th class="">月</th>
        <th class="">火</th>
        <th class="">水</th>
        <th class="">木</th>
        <th class="">金</th>
        <th class="">土</th>
        <th class="text-danger">日</th>
        <th class="text-danger">月</th>
        <th class="">火</th>
        <th class="">水</th>
        <th class="">木</th>
        <th class="">金</th>
        <th class="">土</th>
        <th class="text-danger">日</th>
        <th class="">月</th>
        <th class="">火</th>
        <th class="">水</th>
        <th class="">木</th>
        <th class="">金</th>
        <th class="">土</th>
        <th class="text-danger">日</th>
        <th class="">月</th>
        <th class="">火</th>
        <th class="">水</th>
        <th class="">木</th>
        <th class="">金</th>
        <th class="">土</th>
        <th class="text-danger">日</th>
    </tr>



    @for ($s = 0; $s < 10; $s++)
        <tr>
            <th class="text-center bg-secondary text-light">ST00000{{$s}}</th>
            @for ($i = 1; $i < 32; $i++)
                <td><a href="/reservations/create">{{$i}}</a></td>
            @endfor
        </tr>
    @endfor


        <tr>
            <th class="text-center bg-secondary text-light">ST000010</th>
                <td><a href="/reservations/create">1</a></td>
                <td><a href="/reservations/create">2</a></td>
                <td><a href="/reservations/create">3</a></td>
                <td><a href="/reservations/create">4</a></td>
                <td><a href="/reservations/create">5</a></td>
                <td><a href="/reservations/create">6</a></td>
                <td><a href="/reservations/create">7</a></td>
                <td><a href="/reservations/create">8</a></td>
                <td><a href="/reservations/create">9</a></td>
                <td><a href="/reservations/create">10</a></td>
                <td><a href="/reservations/create">11</a></td>
                <td><a href="/reservations/create">12</a></td>
                <td><a href="/reservations/create">13</a></td>
                <td><a href="/reservations/create">14</a></td>
                <td><a href="/reservations/create">15</a></td>
                <td><a href="/reservations/create">16</a></td>
                <td><a href="/reservations/create">17</a></td>
                <td><a href="/reservations/create">18</a></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td class="bg-secondary"></td>
                <td><a href="/reservations/create">30</a></td>
                <td><a href="/reservations/create">31</a></td>
        </tr>



    </table>








@endsection