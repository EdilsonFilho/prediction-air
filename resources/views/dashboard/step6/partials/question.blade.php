<div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                @php

                    $title = key(\App\Models\Question::step6($number));
                    $question = \App\Models\Question::step6($number);
                    $rowSpan = count($question[$title]);
                    $option_0 = isset($question[$title][0]) ? $question[$title][0] : null;
                    $option_1 = isset($question[$title][1]) ? $question[$title][1] : null;

                    // São variáveis apenas questãos 3 e/ou 4
                    $option_2 = isset($question[$title][2]) ? $question[$title][2] : null;
                    $option_3 = isset($question[$title][3]) ? $question[$title][3] : null;

                @endphp
                <td width="20%" rowspan="{{ $rowSpan }}" class="border middle">
                    {{ $title }}
                </td>
                <td width="70%">
                    {{ $option_0 }}
                </td>
                <td width="10%" class="border">
                    <div class="icheck-material-green">
                        {{ Form::radio('step6_' . $number, $option_0, null, ['id' => '0_' . $number . $option_0]) }}
                            <label for="0_{{ $number . $option_0 }}"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="20%">
                    {{ $option_1 }}
                </td>
                <td width="70%" class="border">
                    <div class="icheck-material-green">
                        {{ Form::radio('step6_' . $number, $option_1, null, ['id' => '1_' . $number . $option_1]) }}
                        <label for="1_{{ $number . $option_1 }}"></label>
                    </div>
                </td>
            </tr>

            @isset($option_2)
                <tr>
                    <td width="20%">
                        {{ $option_2 }}
                    </td>
                    <td width="70%" class="border">
                        <div class="icheck-material-green">
                            {{ Form::radio('step6_' . $number, $option_2, null, ['id' => '2_' . $number . $option_2]) }}
                            <label for="2_{{ $number . $option_2 }}"></label>
                        </div>
                    </td>
                </tr>
            @endisset

            @isset($option_3)
                <tr>
                    <td width="20%">
                        {{ $option_3 }}
                    </td>
                    <td width="70%" class="border">
                        <div class="icheck-material-green">
                            {{ Form::radio('step6_' . $number, $option_3, null, ['id' => '2_' . $number . $option_3]) }}
                            <label for="2_{{ $number . $option_3 }}"></label>
                        </div>
                    </td>
                </tr>
            @endisset

        </tbody>
    </table>
</div>
