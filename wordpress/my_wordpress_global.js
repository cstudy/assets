window.console.log1=window.console.log;
window.console.log=function(...args){
    if((`${args[0]}`).includes("github.com")){return};
    window.console.log1.apply(null,args);
}
