import React from "react";
import { useEffect } from "react";

export default function Message({
    color,
    message,
    messageShow,
    setMessageShow,
}) {
    useEffect(() => {
        const timeout = setTimeout(() => setMessageShow(false), 2000);
        return () => {
            clearTimeout(timeout);
        };
    });

    let classes =
        "fixed bottom-4 right-4 rounded-lg p-2 m-4 text-lg animate-appear opacity-0";

    switch (color) {
        case "green":
            classes += " bg-green-700 text-black";
            break;

        case "red":
            classes += " bg-red-700 text-white";
            break;

        case "yellow":
            classes += " bg-yellow-400 text-black";
            break;

        default:
            break;
    }

    return (
        <>{messageShow ? <div className={classes}>{message}</div> : <></>}</>
    );
}
