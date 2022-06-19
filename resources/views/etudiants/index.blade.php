@extends("layouts.main")

@section("content")


<div class="QA_table mb_30">

    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">Category</th>
                <th scope="col">Teacher</th>
                <th scope="col">Lesson</th>
                <th scope="col">Enrolled</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"> <a href="data_table.html#" class="question_content">
                        title here 1</a></th>
                <td>Category name</td>
                <td>Teacher James</td>
                <td>Lessons name</td>
                <td>16</td>
                <td>$25.00</td>
                <td><a href="data_table.html#" class="status_btn">Active</a></td>
            </tr>
        </tbody>
    </table>
</div>
</div>

@endsection