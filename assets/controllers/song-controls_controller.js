let caudio = null;

import { Controller } from '@hotwired/stimulus';
import axios from 'axios';

export default class extends Controller {
    static values = {
        infoUrl: String,
    };

    play(event) {
        event.preventDefault();
        if (caudio) {
            caudio.pause();
            caudio.currentTime = 0;
        }
        axios.get(this.infoUrlValue)
            .then(response => {
                const audio = new Audio(response.data.url);
                caudio = audio;
                audio.play();
            })

    }
}