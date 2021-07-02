import axios from 'axios';

export default {
    getfirstquestion(lang_id) {
        return axios.get(document.location.origin+'/test/api/getfirstquestion/'+lang_id);
    }
}
