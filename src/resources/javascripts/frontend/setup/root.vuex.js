import Vue from 'vue';
import Vuex from 'vuex';
import UserModule from './modules/user.vuex';
import PlanModule from './modules/plan.vuex';
import AgencyModule from './modules/agency.vuex';
import TransientModule from './modules/transient.vuex';
import OptionModule from './modules/options.vuex';
import ErrorModule from './modules/errors.vuex';
import ServiceModule from './modules/services.vuex';

Vue.use(Vuex);

const store = new Vuex.Store({
    modules: {
        user: UserModule,
        plan: PlanModule,
        agency: AgencyModule,
        transient: TransientModule,
        options: OptionModule,
        errors: ErrorModule,
        services: ServiceModule
    }
});

export default store;
