<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FortuneTest extends TestCase
{
    // トップページの存在チェック
    public function test_topPage(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    // 占いページ
    // 各誕生数毎のページが生成されることを確認する
    public function test_fortunePage(): void
    {
        // 誕生数１
        $response = $this->get('/kabbala?year=2000&month=1&day=7');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara01.png');
        // 誕生数２
        $response = $this->get('/kabbala?year=2000&month=1&day=8');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara02.png');
        // 誕生数３
        $response = $this->get('/kabbala?year=2000&month=1&day=9');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara03.png');
        // 誕生数４
        $response = $this->get('/kabbala?year=2000&month=1&day=1');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara04.png');
        // 誕生数５
        $response = $this->get('/kabbala?year=2000&month=1&day=2');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara05.png');
        // 誕生数６
        $response = $this->get('/kabbala?year=2000&month=1&day=3');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara06.png');
        // 誕生数７
        $response = $this->get('/kabbala?year=2000&month=1&day=4');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara07.png');
        // 誕生数８
        $response = $this->get('/kabbala?year=2000&month=1&day=5');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara08.png');
        // 誕生数９
        $response = $this->get('/kabbala?year=2000&month=1&day=6');
        $response->assertStatus(200);
        $response->assertSee('images/title_chara09.png');
    }

    // 年のバリデーション
    public function test_validationYear(): void
    {
        // 年の設定し忘れ
        $response = $this->get('/kabbala?year=&month=1&day=7');
        $response->assertStatus(302);
        // $response->exception では次のドキュメントに該当する例外が発生する
        // （これは dd($response->exception) で確認した）
        // https://laravel.com/api/10.x/Illuminate/Validation/ValidationException.html
        // その中に errors() が存在することがわかる
        $this->assertSame
        (
            '年は必ず指定してください。',
            $response->exception->errors()['year'][0]
        );

        // 年の桁数が少なすぎる
        $response = $this->get('/kabbala?year=1&month=1&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '年は4桁で指定してください。',
            $response->exception->errors()['year'][0]
        );

        // 年の桁数が多すぎる
        $response = $this->get('/kabbala?year=12345&month=1&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '年は4桁で指定してください。',
            $response->exception->errors()['year'][0]
        );

        // 年の桁数がちょうどいい
        $response = $this->get('/kabbala?year=1234&month=1&day=7');
        $response->assertStatus(200);

        // 年に数字以外を与える
        $response = $this->get('/kabbala?year=hello&month=1&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '年には、数字を指定してください。',
            $response->exception->errors()['year'][0]
        );
    }

    // 月のバリデーション
    public function test_validationMonth(): void
    {
        // 月の設定し忘れ
        $response = $this->get('/kabbala?year=1234&month=&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '月は必ず指定してください。',
            $response->exception->errors()['month'][0]
        );

        // 月の桁数が多すぎる
        $response = $this->get('/kabbala?year=1234&month=123&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '月は1桁から2桁の間で指定してください。',
            $response->exception->errors()['month'][0]
        );

        // 月の桁数がちょうどいい
        $response = $this->get('/kabbala?year=1234&month=1&day=7');
        $response->assertStatus(200);

        // 月の数字が少なすぎる
        $response = $this->get('/kabbala?year=1234&month=0&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '月には、1以上の数字を指定してください。',
            $response->exception->errors()['month'][0]
        );

        // 月の数字が多すぎる
        $response = $this->get('/kabbala?year=1234&month=13&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '月には、12以下の数字を指定してください。',
            $response->exception->errors()['month'][0]
        );

        // 月に数字以外を与える
        $response = $this->get('/kabbala?year=1234&month=hi&day=7');
        $response->assertStatus(302);
        $this->assertSame
        (
            '月には、数字を指定してください。',
            $response->exception->errors()['month'][0]
        );
    }

    // 日のバリデーション
    public function test_validationDay(): void
    {
        // 日の設定し忘れ
        $response = $this->get('/kabbala?year=1234&month=1&day=');
        $response->assertStatus(302);
        $this->assertSame
        (
            '日は必ず指定してください。',
            $response->exception->errors()['day'][0]
        );

        // 日の桁数が多すぎる
        $response = $this->get('/kabbala?year=1234&day=12&day=123');
        $response->assertStatus(302);
        $this->assertSame
        (
            '日は1桁から2桁の間で指定してください。',
            $response->exception->errors()['day'][0]
        );

        // 日の桁数がちょうどいい
        $response = $this->get('/kabbala?year=1234&month=1&day=7');
        $response->assertStatus(200);

        // 日の数字が少なすぎる
        $response = $this->get('/kabbala?year=1234&day=1&day=0');
        $response->assertStatus(302);
        $this->assertSame
        (
            '日には、1以上の数字を指定してください。',
            $response->exception->errors()['day'][0]
        );

        // 日の数字が多すぎる
        $response = $this->get('/kabbala?year=1234&day=12&day=32');
        $response->assertStatus(302);
        $this->assertSame
        (
            '日には、31以下の数字を指定してください。',
            $response->exception->errors()['day'][0]
        );

        // 日に数字以外を与える
        $response = $this->get('/kabbala?year=1234&day=1&day=hi');
        $response->assertStatus(302);
        $this->assertSame
        (
            '日には、数字を指定してください。',
            $response->exception->errors()['day'][0]
        );
    }
}
