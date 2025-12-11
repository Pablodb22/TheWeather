/** @jest-environment jsdom */

document.body.innerHTML = `
  <button class="ciudadesrecientes">Madrid</button>
  <button class="ciudadesrecientes">Barcelona</button>
`;

require('./botonreciente.js');

describe('Botones recientes', () => {
  it('muestra un alert al hacer click en un botón reciente', () => {
    window.alert = jest.fn();
    const botones = document.querySelectorAll('.ciudadesrecientes');
    botones[0].click();
    expect(window.alert).toHaveBeenCalledWith('Botón reciente presionado');
  });
});
