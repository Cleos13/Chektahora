<div id="data-shadow">
    <div class="data-shadow-user">
        <button style="right: 25px; top: 15px; cursor: pointer;" class="absolute" id="close-data-shadow">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#4F2D83" class="bi bi-x-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </button>
        <div style="width: 80%; height: 60%; margin-top: 100px; margin-left: auto;margin-right: auto;">
            <div class="">
                <h3 class="fw-bold">
                    Detalle del cliente
                    <span class="fw-normal fs-5">
                        <span id="number_order" data-shadow></span> - <span id="id__order" data-shadow></span>
                    </span>
                </h3>
            </div>
            <div class="d-flex align-height-center shadow-estatus-data" style="margin-top: 35px; ">
                <div class="d-flex">
                    <div>
                        <div id="date_pay_data" data-shadow></div>
                        <div id="hours_pay_data" data-shadow class="fw-bold"></div>
                    </div>
                    <span class="data-estatus">
                        <div>
                            <img src="../css/img/backoffice/completed.png" alt="" width="40px;">
                            <span>
                                Completado
                            </span>
                        </div>
                    </span>
                </div>
                <div class="px-3 d-flex" id="estatus_data">
                    <div id="estatus_red_data" class="estatus_red active"></div>
                    <div id="estatus_green_data" class="estatus_green"></div>
                    <div id="estatus_yellow_data" class="estatus_yellow"></div>
                </div>
            </div>
            <div class="data-accordion">
                <ul class="space-accordion" data-accordion>
                    <li class="accordion-item <?php echo ($data[0]['type'] == 'Customers' || $data[0]['type'] == 'Admin') ? '' : 'display-none'; ?>" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Datos del paciente</div>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <div>
                                <span class="fw-bold">Nombre y apellidos: </span>
                                <span id="name_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Email: </span>
                                <span id="email_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Tel: </span>
                                <span id="tel_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Donde nos conoce: </span>
                                <span id="con_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_covid">
                                <span class="fw-bold" space="data_covid">Medicamentos: </span>
                                <span id="med_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_covid">
                                <span class="fw-bold" space="data_covid">Sintomas: </span>
                                <span id="sin_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_covid">
                                <span class="fw-bold" space="data_covid">Pasaporte: </span>
                                <span id="pas_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_clinicos">
                                <span class="fw-bold" space="data_clinicos">Clinicos: </span>
                                <span id="clinicos_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Sexo: </span>
                                <span id="sex_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold"> Fecha de nacimiento: </span>
                                <span id="fn_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_its">
                                <span class="fw-bold">Its: </span>
                                <span id="its_data" data-shadow></span>
                            </div>
                            <!-- Personas extras -->
                            <div data-shadow id="people_plus"></div>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Dirección del paciente</div>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <div class="display-none" space="data_covid">
                                <span class="fw-bold" space="data_covid">Fecha agendada: </span>
                                <span id="date_covid_data" data-shadow></span>
                            </div>
                            <div class="display-none" space="data_covid">
                                <span class="fw-bold" space="data_covid">Hora agendada: </span>
                                <span id="hora_covid_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Calle: </span>
                                <span id="street_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">No. Ext: </span>
                                <span id="no_ext_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">No. Int: </span>
                                <span id="no_int_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">CP: </span>
                                <span id="cp_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Colonia: </span>
                                <span id="suburb_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Municipio: </span>
                                <span id="municipality_data" data-shadow></span>
                            </div>
                            <div>
                                <span class="fw-bold">Estado: </span>
                                <span id="state_data" data-shadow></span>
                            </div>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">
                            <div>Detalles de la compra</div>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <div class="fw-bold fs-18px mb-3">Productos</div>
                            <div class="mb-2">
                                <span class="fw-bold">Promoción aplicada: </span>
                                <span id="promotion" data-shadow></span>
                            </div>
                            <div data-shadow id="products_order">

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <?php
            if ($data[0]['type'] == 'Customers') {
                echo '<div class="d-flex data-footer" style="justify-content: space-between">
                                    <a class="edit-data" id="id_order">Modificar registro</a>
                                    <button class="change-estatus" id="estatus_customer" >Datos verificados</button>
                                </div>';
            }
            if ($data[0]['type'] == 'Logistics') {
                echo '<div class="d-flex data-footer" style="justify-content: end">
                                    <button class="change-estatus" id="estatus_logistica">Agendado</button>
                                </div>';
            }
            ?>
        </div>
    </div>
</div>