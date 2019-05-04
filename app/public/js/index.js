class Timer {
    constructor() {
        this.timer_button = $('#timer_btn');
        this.timer_text = $('#timer_text');
        this.common_div = Timer._init_timer_view();//out_div.width()
        this._init_timer_button();
        this._init_timer_text();
        this.is_run_timer = false;//タイマーが動いているか否か

        //タイマー押下
        this.timer_button.click(() => {
            console.log('click timer');
            this.is_run_timer ? this._stop() : this._start();
        });
    }

    //タイマースタート
    init_timer(sec) {
        this.time = sec;
        let set_text = () => {
            let time = Timer.converter(this.time);
            this.timer_text.text(time.min + ':' + time.sec);
        };

        set_text();

        let calc = () => {
            console.log(this.time);
            if (this.is_run_timer) {
                console.log('reload time');
                this.time = this.time - 1;
                set_text();
            }
        };

        //タイマー
        setInterval(function () {
            calc();
        }, 1000);
    }

    //タイマー描画処理
    static _init_timer_view() {
        //円
        let out_div = $('#out');
        out_div.css('background-color', 'white');
        out_div.css('width', '85%');
        out_div.height(out_div.width());
        out_div.css('border-radius', out_div.width());
        out_div.css('border', 'yellowgreen 10px solid');

        return out_div.width();
    }

    //タイマーボタン
    _init_timer_button() {
        this.timer_button.css({
            'font-size': '33px'
            , 'font-weight': 'bold'
            , 'position': 'relative'
            , 'top': this.common_div / 2.6
        });
    }

    //タイマーテキスト
    _init_timer_text() {
        this.timer_text.css({
            'font-size': '33px'
            , 'font-weight': 'bold'
            , 'position': 'relative'
            , 'top': this.common_div / 2.9
        })
    }

    //タイマースタート
    _start() {
        console.log('start');
        this.is_run_timer = true;
        //ストップボタンを設置
        this.timer_button.find('i').removeClass('fa-play');
        this.timer_button.find('i').addClass('fa-stop');
    }

    //タイマーストップ
    _stop() {
        console.log('stop');
        this.is_run_timer = false;
        //スタートボタンを設置
        this.timer_button.find('i').removeClass('fa-stop');
        this.timer_button.find('i').addClass('fa-play');
    }

    //secをmin,secに変換
    static converter(sec_time) {
        let min = Math.floor(sec_time / 60);
        let sec = sec_time % 60;

        return {
            min: String(min).padStart(2, "0"),
            sec: String(sec).padStart(2, "0")
        }
    }

}

$(() => {
    let timer = new Timer();
    timer.init_timer(60);
});
